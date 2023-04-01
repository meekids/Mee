#!/usr/bin/env python3 ii

import cgi

# initialize empty lists to store email and Instagram handle data
emails = []
igHandles = []

# retrieve the data from the form
form = cgi.FieldStorage()
email = form.getvalue('email')
igHandle = form.getvalue('igHandle')

# if email and Instagram handle are not None, append to respective lists
if email:
	emails.append(email)
if igHandle:
	igHandles.append(igHandle)

# print a success message
print("Content-type:text/html\r\n\r\n")
print("<html>")
print("<head>")
print("<title>Submission Successful</title>")
print("</head>")
print("<body>")
print("<h2>Successfully Submitted, Thanks!</h2>")
print("</body>")
print("</html>")