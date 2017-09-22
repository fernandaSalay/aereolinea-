CREATE TABLE BOLETO(
	[BOLETO_ID][INT] NOT NULL,
	[VUELO_ID][INT] NOT NULL,
	[PASAJERO_ID][INT] NOT NULL,
	[PRECIO][FLOAT] NOT NULL,
	[SERIE_ID][INT] NOT NULL,
	[FECHA_EMISION] [DATETIME] NOT NULL
CONSTRAINT [PK_BOLETO_ID] PRIMARY KEY CLUSTERED 
(
	[BOLETO_ID] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
 INSERT INTO BOLETO VALUES(2,1,1,120.25,12,CONVERT(DATETIME,GETDATE()));
  INSERT INTO BOLETO VALUES(1,2,1,185.26,18,CONVERT(DATETIME,'2017-09-16'));
 
 SELECT * FROM BOLETO;

 DROP TABLE BOLETO;