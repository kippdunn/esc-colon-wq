DELIMITER ;;

CREATE PROCEDURE `spInsUser`(
	IN fName char(32), 
    IN lName char(32), 
    IN email char(64), 
    IN uname char(32), 
    IN passHash char(128),
    IN salt char(16)
)
BEGIN

-- Add a new Team representing the new user
INSERT INTO Teams (`TeamName`) 
VALUES (
    uname
);

-- Add a new User with their credentials and Team foreign key
INSERT INTO Users (`FirstName`, `LastName`, `Email`, `Username`, `PasswordHash`, `Salt`, `TeamID`)
VALUES (
    fName,
    lName,
    email,
    uname,
    passHash,
    salt,
    LAST_INSERT_ID()
);

END;;

DELIMITER ;