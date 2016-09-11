//
//  Store.swift
//  HunterPrice
//
//  Created by Gessy on 9/10/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation


class StoreData{
    
    class Store{
        let name      : String
        let latitude  : String
        let longitude : String
        let address   : String
        let phone     : String
        init(name:String,latitude:String,longitude:String,address:String,phone:String) {
            self.name = name
            self.latitude = latitude
            self.longitude = longitude
            self.address = address
            self.phone = phone
        }
        
    }
}
