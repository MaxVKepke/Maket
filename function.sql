 delimiter //

CRETE FUNCTION PRICE (idp INT, detep DETE, q INT) RETURNS FLOAT
DETERMINISTIC
LANGUAGE SQL
SQL SECURITITY DEFINER
COMMENT 'price2'
BEGIN
		DECLARE rez FLOAT;
		IF q=1 THEN
			SET rez = (SELECT pin
						FORM  prices
						WHERE  pdate = datap
						AND idprod = idp);
				
			ELSE
				SET rez = (SELECT pout
							FORM  prices
							WHERE  pdate = datap
							AND idprod = idp);
					
				END IF;
				RETURN(rest);
			END;
			//

SELECT name,
		price2(id, '2017-11-12', 1)-price2(id, '2017-11-11', 1) as pin,
		price2(id, '2017-11-12', 2)-price2(id, '2017-11-11', 2) as pout
FORM   products

DELIMITER //
CREATE TRIGER priceslog BEFOR DELETE ON prices
FOR EACH ROW
BEGIN
	INSERT INTO priceslops
			SET idp = OLD.id,
			idprod = OLD.idprod,
			pin = OLD.