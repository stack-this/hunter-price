//
//  ProductControll.swift
//  HunterPrice
//
//  Created by Gessy on 9/11/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation
import UIKit


class ProductController: UITableViewController{

    var product : ProductData!

    let products: [String] = [
        "Cocacola",
        "Fanta",
        "Pepsi",
        "Agua",
        "Jugo",
        ]

    override func viewDidLoad() {
        super.viewDidLoad()
        self.tableView.separatorStyle = UITableViewCellSeparatorStyle.none
        
        //conexion()
        
    }
    override func viewDidAppear(_ animated: Bool){
        
    }
    
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    
    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return self.products.count
    }

    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        
        let cell = tableView.dequeueReusableCell(withIdentifier: "ProductCell", for: indexPath as IndexPath) as! ProductCell
        let entry = products[indexPath.row]
        let lblName = entry
        cell.lblName.text = lblName
        return cell
    }
    
    func tableView(tableView: UITableView, didSelectRowAtIndexPath indexPath: NSIndexPath) {
        
        let renglon = indexPath.row
        let seccion = indexPath.section
        
        print("El renglon: \(renglon)")
        print("La Seccion: \(seccion)")
    }

}
