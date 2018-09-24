DELIMITER ;;

CREATE PROCEDURE `spInsProblemType`(
    IN category char(32)
)
BEGIN

-- Add a new category name
INSERT INTO ProblemTypes (`CategoryName`) 
VALUES (
    category
);

END;;

DELIMITER ;
