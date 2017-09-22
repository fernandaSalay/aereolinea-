CREATE Procedure pReservador
	(
		@asientos_id int,
		@columna int,
		@fila int
	)
AS
CASE WHEN (EXEC pVerificadorDisponibilidad @asientos_id, @columna, @fila) = 'DISPONIBLE'
THEN (EXEC pReservador @asientos_id, @columna, @fila)
ELSE (EXEC pVerificadorDisponibilidad @asientos_id, @columna, @fila);