//
//  Product.swift
//  HunterPrice
//
//  Created by Gessy on 9/10/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation

class ProductData {
    class Product {
        let name : String
        let lowerPrice : String
        let higherPrice : String
        let quantity : String
        let unity : String
        let status : String
        let descripcion : String
        
        
        init(name: String, lowerPrice: String,higherPrice: String,quantity: String,unity: String,status: String,descripcion: String) {
            self.name = name
            self.lowerPrice = lowerPrice
            self.higherPrice = higherPrice
            self.quantity = quantity
            self.unity = unity
            self.status = status
            self.descripcion = descripcion
        }
    }

}




