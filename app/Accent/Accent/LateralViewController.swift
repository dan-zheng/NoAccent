//
//  LateralViewController.swift
//  Accent
//
//  Created by Richard Wei on 11/22/15.
//  Copyright © 2015 accent. All rights reserved.
//

import UIKit

class LateralViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
extension LateralViewController {
    func rightSwipeDetected(recognizer: UIGestureRecognizer) {
        let position = recognizer.locationInView(self.view)
    }
}