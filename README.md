[![Sign Up](https://img.shields.io/github/downloads/Sam-Ryan/Scylla/total.svg)](http://api.yougraph.fr)

# YouShort
A Free URL shortened with an api


------
<b>Installation</b>

| Step | Description |
| :--- | :--- |
| 1. |Create an account and Sign In on http://api.yougraph.fr |
| 2. | Fill in the information for setting up your account |
| 3. |  Get your API Key and configure it |
| 4. |To send a request, the user must use the following format where the variables api and url are required.To request a custom alias, simply    add &custom= at the end. |
| 5. |   ```php GET http://api.yougraph.fr/api/?key=YOURAPIKEY&url=THELONGURLTOBESHORTENED&custom=CUSTOMALIAS ``` |
| 6. | To use the API in your PHP application, you have to send a GET request through file_get_contents or cURL: Both are reliable methods. |

------

<b> Quick Shortener</b>

* This tool allows you to quickly shorten any URL in any page without using any fancy method. This is perhaps the quickest and the easiest method available for you to shorten URLs across all platforms. This method will generate a unique short URL for you that you will be able to access anytime from your dashboard.
* Use your quick URL below to shorten any URL by adding the URL after /q/?u=. For security reasons, you need to be logged in and using the remember me feature. Check out the examples below to understand how to use this method.

   Usage:  ```php http://api.yougraph.fr/q/?u=URL_OF_SITE ```

* Examples </br>
  http://api.yougraph.fr/q/?u=https://www.google.com </br>
  http://api.yougraph.fr/q/?u=snapchat.com </br>
  http://api.yougraph.fr/q/?u=https://www.apple.com/iphone-x/

# Screenshot
* Dashboard
![](https://github.com/Sam-Ryan/YouShort/blob/master/images/Screenshot_1.png?raw=true)

* Short URL
![](https://github.com/Sam-Ryan/YouShort/blob/master/images/Screenshot_2.png?raw=true)

* Functions
![](https://github.com/Sam-Ryan/YouShort/blob/master/images/Screenshot_3.png?raw=true)




* Notes

  Please note that this method does not return anything. It simply redirects the user to the redirection page. However if you need the        actual short URL, you can always get it from your dashboard.
  
  # Contributions
- Any contribution is more than welcome! You can contribute through pull requests and [issues] https://github.com/Sam-Ryan/YouShort/issues
  
  ### Notices:

- You do not have to comply with the license for elements of the material in the public domain or where your use is permitted by an applicable exception or limitation.
- No warranties are given. The license may not give you all of the permissions necessary for your intended use. For example, other rights such as publicity, privacy, or moral rights may limit how you use the material.

Thank you!
