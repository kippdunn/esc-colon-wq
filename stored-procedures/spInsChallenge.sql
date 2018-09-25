DELIMITER ;;

ALTER PROCEDURE `spInsChallenge`(
	IN title char(128), 
    IN description text, 
    IN points tinyint unsigned, 
    IN category char(32), 
    IN flag char(128)
)
BEGIN

-- Add a new Challenge
INSERT INTO Challenges (`Title`, `Description`, `PointsWorth`, `ProblemTypeID`) 
VALUES (
    title,
    description,
    points,
    (
        SELECT
            `pkProblemType`
        FROM
            `ProblemTypes`
        WHERE
            `CategoryName` = category
    )
);

-- Add a new Solution for the new challenge
INSERT INTO Solutions (`Flag`, `ChallengeID`)
VALUES (
    flag,
    LAST_INSERT_ID()
);

END;;

DELIMITER ;