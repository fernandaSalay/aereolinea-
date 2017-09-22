CREATE Procedure pHabilitador
	(
		@asientos_id int,
		@columna int,
		@fila int
	)
AS
DECLARE @sqlCommand varchar(1000)
SET @sqlCommand = 'UPDATE ASIENTOS 
			       SET COLUMNA_'+CAST(@columna as varchar(10))+'_FILA_'+CAST(@fila as varchar(10))+' = '' ''
				   WHERE ASIENTOS_ID = '+CAST(@asientos_id as varchar(10))
EXEC (@sqlCommand);