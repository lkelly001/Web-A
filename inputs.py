from sys import argv

script, user_name = argv
prompt = '>'

print "Hi %s, What is your major?" % user_name
major = raw_input(prompt)

if __name__ == '__main__':
    print "Henley is a %r major." % (major)