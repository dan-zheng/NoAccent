//
//  ResourceCache.swift
//  Accent
//
//  Created by Richard Wei on 11/22/15.
//  Copyright © 2015 accent. All rights reserved.
//

import UIKit

class ResourceCache: NSObject {
    static var sharedCache = ResourceCache()
    
    private var dict = [String: AnyObject]()
    
    subscript(key: String) -> AnyObject? {
        get {
            return dict[key]
        }
        set(object) {
            dict[key] = object
        }
    }
}
