/*Checks to see if the email address already exists in the database*/
/*If it does, then we do not allow the user to create another account with that email*/
/*If not, then we allow them to create a new account with that email*/

DELIMITER//
CREATE TRIGGER check_email_existence BEFORE INSERT ON Users
BEGIN



    IF EXISTS (SELECT * FROM Users WHERE email=NEW.email) THEN
