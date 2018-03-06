# Database Schema:

Three Primary Tables:

1. book
2. author
3. user
    
Relations as Tables:

1. owns
2. lended


## Description of Tables (Bold => Primary Key)

1. book
    * **bookid** (same as used by Google Books API)
    * isbn
    * title
    * img (link to image stored in Google server)
    * pubyr
    * publisher
    * rating
    * ratingcount
    * language
    
    To be included later:
    * category/genre
    * description

2. author
    * **bookid**
    * **authname**
    
3. user
    * fname
    * lname
    * **email**
    * password (hashed using bcrypt)
    * hostel
    * roomno
    * phone
    * hash (to generate link for resetting password)
    * activated (initially 0, 1 implies verified email id)
 
## Description of Relational Tables:

1. owns
    * **email** (email id of the owner)
    * **bookid**

2. lended
    * **lender** (email id of the lender)
    * **borrower** (email id of the borrower)
    * **bookid**
