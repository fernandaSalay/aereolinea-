CREATE Procedure pVerificadorDisponibilidad(@asientos_id int, @columna int,	@fila int)
AS
DECLARE @sqlCommand varchar(1000)
SET @sqlCommand = 'SELECT CAST(
								 CASE 
									  WHEN (SELECT COLUMNA_'+CAST(@columna as varchar(10))+'_FILA_'+CAST(@fila as varchar(10))+' FROM ASIENTOS WHERE ASIENTOS_ID = '+CAST(@asientos_id as varchar(10))+' ) = ''X'' 
										 THEN (SELECT ''APARTADO'') 
									  ELSE (SELECT ''DISPONIBLE'')
								 END AS varchar(255)) as Asiento
					FROM ASIENTOS'
EXEC (@sqlCommand);