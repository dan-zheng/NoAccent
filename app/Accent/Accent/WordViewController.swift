//
//  WordViewController.swift
//  Accent
//
//  Created by Richard Wei on 11/21/15.
//  Copyright © 2015 accent. All rights reserved.
//

import UIKit

class WordViewController: UIViewController {
    
    var word: String!
    
    @IBOutlet var wordLabel: UILabel!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        wordLabel.text = word;
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func recordButtonPressed(sender: AnyObject) {
        
    }

    @IBAction func analyseButtonPressed(sender: AnyObject) {
        
    }
    
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }

}
