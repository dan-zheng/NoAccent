//
//  WordPickerViewCell.swift
//  Accent
//
//  Created by Richard Wei on 11/21/15.
//  Copyright © 2015 accent. All rights reserved.
//

import UIKit

class WordPickerViewCell: UITableViewCell {
    @IBOutlet var wordButton: UIButton!

    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
        
        wordButton.setTitle("Word", forState: .Normal)
    }

    override func setSelected(selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }

}
