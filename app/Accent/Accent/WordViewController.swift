//
//  WordViewController.swift
//  Accent
//
//  Created by Richard Wei on 11/21/15.
//  Copyright © 2015 accent. All rights reserved.
//

import UIKit
import MobileCoreServices
import MediaPlayer
import QuickLook

extension UIColor {
    convenience init(red: Int, green: Int, blue: Int) {
        assert(red >= 0 && red <= 255, "Invalid red component")
        assert(green >= 0 && green <= 255, "Invalid green component")
        assert(blue >= 0 && blue <= 255, "Invalid blue component")
        
        self.init(red: CGFloat(red) / 255.0, green: CGFloat(green) / 255.0, blue: CGFloat(blue) / 255.0, alpha: 1.0)
    }
    
    convenience init(netHex:Int) {
        self.init(red:(netHex >> 16) & 0xff, green:(netHex >> 8) & 0xff, blue:netHex & 0xff)
    }
}

class WordViewController: UIViewController, UIGestureRecognizerDelegate {
    
    var word: String!
    @IBOutlet weak var wordLabel: UILabel!
    
    var cameraController = UIImagePickerController()
    
    private var cameraOffRect: CGRect!
    private var cameraOnRect: CGRect!
    
    private let kButtonPressedAlpha: CGFloat = 0.0
    private let kButtonReleasedAlpha: CGFloat = 0.35
    
    private let kNormalBackgroundColor = UIColor(netHex: 0x9900CC)
    private let kRecordingBackgroundColor = UIColor(netHex: 0x990033)
    
    private let kReleasedActionLabel: String = "PRESS AND HOLD TO RECORD"
    private let kPressedActionLabel: String = "RELEASE TO STOP"
    
    var actionLabel: UILabel!
    var recordButton: UIButton!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        wordLabel.text = word;
        
        // Camera
        cameraController.sourceType = .Camera
        cameraController.mediaTypes = [String(kUTTypeMovie)]
        cameraController.allowsEditing = false
        cameraController.showsCameraControls = false
        cameraController.cameraCaptureMode = .Video
        cameraController.cameraViewTransform = CGAffineTransformIdentity
        cameraController.delegate = self
        cameraController.cameraDevice = .Front
        cameraController.cameraFlashMode = .Off
        cameraController.videoQuality = .Type640x480
        let screenSize = UIScreen.mainScreen().bounds
        let height = screenSize.width
        cameraOnRect = CGRectMake(0.0, screenSize.height - height, screenSize.width, height)
        cameraOffRect = CGRectMake(0.0, screenSize.height, screenSize.width, height)
        cameraController.view.frame = cameraOffRect
        self.view.addSubview(cameraController.view)
        
        // Back Gesture Recognizer
        let swipeGestureRecognizer = UISwipeGestureRecognizer(target: self, action: Selector("rightSwipeDetected:"))
        swipeGestureRecognizer.direction = .Right
        swipeGestureRecognizer.numberOfTouchesRequired = 1
        self.view.addGestureRecognizer(swipeGestureRecognizer)
        
        let lswipeGestureRecognizer = UISwipeGestureRecognizer(target: self, action: Selector("leftSwipeDetected:"))
        lswipeGestureRecognizer.direction = .Left
        lswipeGestureRecognizer.numberOfTouchesRequired = 1
        self.view.addGestureRecognizer(lswipeGestureRecognizer)
        
        // action label
        actionLabel = UILabel(frame: CGRectMake(0.0, screenSize.height - cameraOffRect.height * 11 / 10, cameraOffRect.width, cameraOffRect.height / 10))
        actionLabel.font = UIFont.systemFontOfSize(15.00)
        actionLabel.textColor = UIColor(white: 1.0, alpha: 0.6)
        actionLabel.text = kReleasedActionLabel
        actionLabel.textAlignment = .Center
        actionLabel.alpha = 0.0
        self.view.addSubview(actionLabel)
        UIView.animateWithDuration(0.3, delay: 1.0, options: .CurveEaseOut, animations: {
            self.actionLabel.alpha = 1.0
        }, completion: nil)
        
        
        
        // Calibration Image
        let imageView = UIImageView(image: ResourceCache.sharedCache["CalibrationImage"] as? UIImage)
        imageView.frame = cameraOffRect
        self.view.addSubview(imageView)
        
        // Gray reminder layer
        let grayView = UIView(frame: cameraOffRect)
        grayView.backgroundColor = UIColor.blackColor()
        grayView.alpha = kButtonPressedAlpha
        self.view.addSubview(grayView)
        
        // Invisible record button
        recordButton = UIButton(type: .Custom)
        recordButton.frame = cameraOffRect
        recordButton.backgroundColor = UIColor.blackColor()
        recordButton.addTarget(self, action: Selector("startRecording:"), forControlEvents: .TouchDown)
        recordButton.addTarget(self, action: Selector("stopRecording:"), forControlEvents: .TouchUpInside)
        recordButton.alpha = kButtonReleasedAlpha
        self.view.addSubview(recordButton)
        
        
        UIView.animateWithDuration(0.4, delay: 0.0, options: .CurveEaseOut, animations: {
            self.cameraController.view.frame = self.cameraOnRect
            imageView.frame = self.cameraOnRect
            grayView.frame = self.cameraOnRect
            self.recordButton.frame = self.cameraOnRect
        }, completion: nil)
    }
    
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        return .LightContent
    }
    
    override func preferredStatusBarUpdateAnimation() -> UIStatusBarAnimation {
        return .Slide
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func back(sender: AnyObject) {
        self.navigationController?.popToRootViewControllerAnimated(true)
    }
    
    @IBAction func recordButtonPressed(sender: AnyObject) {
        
    }

    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }

}


extension WordViewController: UIImagePickerControllerDelegate, UINavigationControllerDelegate {
    
    func startRecording(sender: AnyObject) {
        if let button = sender as? UIButton {
            UIView.animateWithDuration(0.3, delay: 0.0, options: .CurveEaseOut, animations: {
                button.alpha = self.kButtonPressedAlpha
                self.view.backgroundColor = self.kRecordingBackgroundColor
                self.actionLabel.text = self.kPressedActionLabel
            }, completion: nil)
        }
        cameraController.startVideoCapture()
    }
    
    func stopRecording(sender: AnyObject) {
        if let button = sender as? UIButton {
            button.hidden = true // ddd
            UIView.animateWithDuration(0.3, delay: 0.0, options: .CurveEaseOut, animations: {
                button.alpha = self.kButtonReleasedAlpha
                self.view.backgroundColor = self.kNormalBackgroundColor
                self.actionLabel.text = self.kReleasedActionLabel
            }, completion: nil)
        }
        cameraController.stopVideoCapture()
        
        actionLabel.hidden = true
        self.view.bringSubviewToFront(cameraController.view)
        cameraController.showsCameraControls = true
    }
    
    //pragma mark- Image
    
    func imagePickerControllerDidCancel(picker: UIImagePickerController) {
        // TODO: Show swipe banner
        cameraController.showsCameraControls = false
        recordButton.hidden = false
        actionLabel.hidden = false
    }
    
    
    func imagePickerController(picker: UIImagePickerController, didFinishPickingImage image: UIImage, editingInfo: [String : AnyObject]?) {
        
    }
    
    func imagePickerController(picker: UIImagePickerController, didFinishPickingMediaWithInfo info: [String: AnyObject]) {
        
//        let mediaType = info[UIImagePickerControllerMediaType] as! NSString
        
        let moviePlayer = MPMoviePlayerViewController(contentURL: info[UIImagePickerControllerMediaURL] as! NSURL)
//        self.presentMoviePlayerViewControllerAnimated(moviePlayer)
        moviePlayer.view.frame = self.cameraOnRect
        self.view.addSubview(moviePlayer.view)
        let qlvc = QLPreviewController()
        qlvc.dataSource = self
        qlvc.delegate = self
        self.addChildViewController(qlvc)
        self.view.addSubview(qlvc.view)
    }
        
}




extension WordViewController : QLPreviewControllerDelegate, QLPreviewControllerDataSource {
    func rightSwipeDetected(recognizer: UIGestureRecognizer) {
        let position = recognizer.locationInView(self.view)
        if position.y < cameraController.view.frame.origin.y {
            back(recognizer)
        }
    }
    func leftSwipeDetected(recognizer: UIGestureRecognizer) {
        let position = recognizer.locationInView(self.view)
        if position.y < cameraController.view.frame.origin.y {
            
        }
    }
    func numberOfPreviewItemsInPreviewController(controller: QLPreviewController) -> Int {
        return 1
    }
    func previewController(controller: QLPreviewController, previewItemAtIndex index: Int) -> QLPreviewItem {
        return NSURL(fileURLWithPath: NSBundle.mainBundle().pathForResource("bed_native_transperant_slow", ofType: "gif")!)
    }
}
