//
//  conexion.swift
//  HunterPrice
//
//  Created by Gessy on 9/10/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation
import UIKit

class conexion: UIViewController{

    override func viewDidLoad() {
        super.viewDidLoad()
        conexion()
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func conexion(){
        // set up the base64-encoded credentials
        
        let postParams :[String:String] = [
            "name" : "Mi mama me mimaGessy",
        ]
        
        let username = "admin"
        let password = "foxtrot01"
        let loginString = NSString(format: "%@:%@", username, password)
        let loginData: NSData = loginString.data(using: String.Encoding.utf8.rawValue)! as NSData
        let base64LoginString = loginData.base64EncodedString(options: [])
        // create the request
        let url = URL(string: "http://172.16.11.240/api/category/")
        let request = NSMutableURLRequest(url: url! as URL)
        request.httpMethod = "POST"
        
        
        
        
        do {
            let jsonData = try JSONSerialization.data(withJSONObject: postParams, options: .prettyPrinted)
            request.httpBody = jsonData
            print(request)
            print(jsonData)
            let decoded = try JSONSerialization.jsonObject(with: jsonData, options: [])
            if let dictFromJSON = decoded as? [String:String] {
                print(dictFromJSON)
            }
        } catch let error as NSError {
            print(error)
        }
        
        
        request.setValue("Basic \(base64LoginString)", forHTTPHeaderField: "Authorization")
        
        _ = NSURLConnection(request: request as URLRequest, delegate: self)
        
        let config = URLSessionConfiguration.default
        let session = URLSession(configuration: config)
        
        let task = session.dataTask(with: request as URLRequest, completionHandler: {(data, response, error) in
            print("Data")
            print(data!)
            print("response")
            print(response!)
            guard let realResponse = response as? HTTPURLResponse , realResponse.statusCode == 200 else{
                print("Not a 200 response")
                return
            }
            if let postString = NSString(data:data!, encoding: String.Encoding.utf8.rawValue) as? String{
                print("POST" + postString)
            }
            if (NSString(data:data!, encoding: String.Encoding.utf8.rawValue) as? String) != nil{
                
                print(data!)
                do {
                    print("do")
                    let jsonDictionary = try JSONSerialization.jsonObject(with: data!, options: JSONSerialization.ReadingOptions.mutableContainers) as! NSDictionary
                    
                    for resultados in jsonDictionary{
                        //Aqui inicia el Juego
                        print(jsonDictionary)
                        print(resultados)
                    }
                   
                }catch {
                    print("error");
                }
            }
            
        });
        task.resume()
    }
    
    
}
