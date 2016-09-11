//
//  List.swift
//  HunterPrice
//
//  Created by Gessy on 9/10/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation


class ListData{
    class List{
        let name : String
        let quantity :String
        let unity : String
        let unityPrice : String
        let totalPrice : String
        init(name:String,quantity:String,unity:String,unityPrice:String,totalPrice:String) {
            self.name = name
            self.quantity = quantity
            self.unity = unity
            self.unityPrice = unityPrice
            self.totalPrice = totalPrice
        }
    }
    
}
