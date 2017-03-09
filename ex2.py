name = "Bob Newhard"
pay_rate = 25.25
hours_worked = 45
totalpay = pay_rate * hours_worked

rates = """
\t* Name: %s
\t* Payrate: %s
\t* Hours Worked: %s
\t* Total Pay: %s
""" % (name, pay_rate, hours_worked, totalpay)

print rates
