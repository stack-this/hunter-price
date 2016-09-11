//
//  Sigin.swift
//  HunterPrice
//
//  Created by Gessy on 9/10/16.
//  Copyright © 2016 GetsemaniAvila. All rights reserved.
//

import Foundation
import UIKit

class Sigin : UIViewController , UITextFieldDelegate{
    
    @IBOutlet weak var txtUser: UITextField!
    @IBOutlet weak var txtEmail: UITextField!
    @IBOutlet weak var txtPassword: UITextField!
    
    @IBAction func btnNuevo(_ sender: UIButton, forEvent event: UIEvent) {
        Register()
    }
    func Register(){
        print("funcion")
        /*let postParams : [String : String] = [
            "nickname" : txtUser.text!,
            "email"    : txtEmail.text!,
            "password" : txtPassword.text!
        ]*/
        let postParams :[String:String] = [
            "nickname" : "NickGessy",
            "email"    : "MailGessy",
            "password" : "PassGessy"
        ]
        
        //172.16.1.46
        print(postParams)
        let username = "admin"
        let password = "foxtrot01"
        let loginString = NSString(format: "%@:%@", username, password)
        let loginData: NSData = loginString.data(using: String.Encoding.utf8.rawValue)! as NSData
        let base64LoginString = loginData.base64EncodedString(options: [])
        //OpStServer
        //let url = URL(string: "http://172.16.11.240/api/users/")
        let url = URL(string: "http://172.16.11.240/api/users/")
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
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        let tap: UITapGestureRecognizer = UITapGestureRecognizer(target: self, action: #selector(UIViewController.dismissKeyboard))
        view.addGestureRecognizer(tap)
        
    }
    ///Ocultar teclado
    override func dismissKeyboard() {
        view.endEditing(true)
    }
}



// Put this piece of code anywhere you like
extension UIViewController {
    func hideKeyboardWhenTappedAround() {
        let tap: UITapGestureRecognizer = UITapGestureRecognizer(target: self, action: #selector(UIViewController.dismissKeyboard))
        view.addGestureRecognizer(tap)
    }
    
    func dismissKeyboard() {
        view.endEditing(true)
    }
}
