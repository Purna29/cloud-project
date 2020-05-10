#!/usr/bin/python

import cgi, cgitb
import MySQLdb

myForm = cgi.FieldStorage()

nick = myForm.getvalue('email')
secret = myForm.getvalue('MyPass')

db= MySQLdb.connect("localhost","vellalap1","81n4br","vellalap1_db") 

myCursor = db.cursor()

sql = "SELECT MyPass from UserPass WHERE email = '%s' "%(nick)

try:
  myCursor.execute(sql)
  output = myCursor.fetchone()

  for row in output:
     sWord  = row
except:
  print "Error: unable to fetch data"
db.close()

if secret == sWord:
  print "Content-type:text/html\r\n\r\n"
  print "<html>"
  print "<head>"
  print "<title>Confirm</title>"
  print "</head>"
  print "<body>"
  print "<h2> WELCOME Back %s !</h2>" %(nick)
  print "</body>"
  print "</html>"
else:
  print "Content-type:text/html\r\n\r\n"
  print "Wrong Password or Username !"
  print "<html>"
