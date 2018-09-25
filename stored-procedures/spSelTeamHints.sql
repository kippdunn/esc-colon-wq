DELIMITER ;;

CREATE PROCEDURE `spSelTeamHints`(
    IN team char(32),
    IN challengeTitle char(128),
    IN hintsUsed int unsigned
)
BEGIN

SELECT
    h.`HintText`,
    h.`Deduction`
FROM
    Hints as h inner join
    Challenges as c on c.`pkChallenge` = h.ChallengeID inner join
    TeamChallenges as tc on tc.`ChallengeID` = c.`pkChallenge` inner join
    Teams as t on t.`pkTeam` = tc.`TeamID`
WHERE
    t.`TeamName` = team AND
    c.`Title` = challengeTitle
ORDER BY
    h.`Priority` DESC,
    h.`Deduction` ASC
LIMIT hintsUsed;

END;;

DELIMITER ;
