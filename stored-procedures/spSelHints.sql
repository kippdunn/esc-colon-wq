DELIMITER ;;

CREATE PROCEDURE `spSelHints`(
    IN team char(32),
    IN challengeTitle char(128)
)
BEGIN

-- Add a new category name
SELECT
    h.`HintText`,
    h.`Deduction`
FROM
    Hints as h inner join
    TeamHints as th on th.HintID = h.pkHint inner join
    Teams as t on t.pkTeam = th.TeamID
WHERE
    t.TeamName = team;

END;;

DELIMITER ;
