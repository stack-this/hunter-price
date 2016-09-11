//
//  CategoryControll.swift
//  HunterPrice
//
//  Created by Gessy on 9/10/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation
import UIKit


class CategoryControll: UITableViewController{

    
    var categoryes : [CategoryData] = []
    
    let category: [String] = [
        "Electronicos",
        "Bebidas*",
        "Cremeria",
        "Farmacia",
        "Jugeteria",
        "Carnes Frias",
        "Lacteos",
        "Frutas y vetduras"
        ]
    /*func conexion() {
        
        let username = "admin"
        let password = "foxtrot01"
        let loginString = NSString(format: "%@:%@", username, password)
        let loginData: NSData = loginString.data(using: String.Encoding.utf8.rawValue)! as NSData
        let base64LoginString = loginData.base64EncodedString(options: [])
        // create the request
        //let url = URL(string: "http://devgrohl.com/main/web/api/product/show/1")
        let url = URL(string: "http://172.16.11.240/api/category/")
        let request = NSMutableURLRequest(url: url! as URL)
        request.httpMethod = "GET"
        
        request.setValue("Basic \(base64LoginString)", forHTTPHeaderField: "Authorization")
        
        _ = NSURLConnection(request: request as URLRequest, delegate: self)
        
        let config = URLSessionConfiguration.default
        let session = URLSession(configuration: config)
        
        let task = session.dataTask(with: request as URLRequest, completionHandler: {(data, response, error) in
            print("Data")
            print(data!)
            print("response")
            print(response!)
            /*guard let realResponse = response as? HTTPURLResponse , realResponse.statusCode == 418 else{
                print("Not a 418 response")
                return
            }*/

            if (NSString(data:data!, encoding: String.Encoding.utf8.rawValue) as? String) != nil{
                print(data!)
                do {
                    print("do")
                    
                    //let jsonDictionary = try JSONSerialization.JSONObjectWithData(nsdata as Data, options: JSONSerialization.ReadingOptions.mutableContainers) as! NSDictionary
                    
                    let jsonArray = try JSONSerialization.jsonObject(with: data!, options: JSONSerialization.ReadingOptions.mutableContainers) as! NSArray
                    print(jsonArray)
                    print(jsonArray.count)
                    print(jsonArray[0])
                    var pep = jsonArray[0] as? [String: AnyObject]
                    print(pep)
                    
                }catch {
                    print("error");
                }
            }
            
        });
        task.resume()
    }*/
    
    func convertStringToDictionary(text: String) -> [String:AnyObject]? {
        if let data = text.data(using: String.Encoding.utf8) {
            do {
                return try JSONSerialization.jsonObject(with: data, options: []) as? [String:AnyObject]
                
            } catch let error as NSError {
                print(error)
            }
        }
        return nil
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        self.tableView.separatorStyle = UITableViewCellSeparatorStyle.none
        //conexion()
        
    }
    override func viewDidAppear(_ animated: Bool){
        //conexion()
    }
    
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    
    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return self.category.count
    }
    
    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
    
        let cell = tableView.dequeueReusableCell(withIdentifier: "CategoryCell", for: indexPath as IndexPath) as! CategoryCell
        let entry = category[indexPath.row]
        let lblCategory = entry
        cell.lblCategory.text = lblCategory
        return cell
    }
    
    func tableView(tableView: UITableView, didSelectRowAtIndexPath indexPath: NSIndexPath) {
        
        let renglon = indexPath.row
        let seccion = indexPath.section
        
        print("El renglon: \(renglon)")
        print("La Seccion: \(seccion)")
    }
    
    // MARK: - Navigation
    
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        if segue.identifier == "showProductDetail" {
            /*if let indexPath = self.tableView.indexPathForSelectedRow {
                let selectedProduct = self.categoryes[indexPath.row]
                let destinationViewController = segue.destination as! ProductController
                destinationViewController.product = selectedProduct
            }*/
        }
    }
}
