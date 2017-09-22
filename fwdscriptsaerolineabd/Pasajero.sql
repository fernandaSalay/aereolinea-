CREATE TABLE [PASAJERO](
	[PASAJERO_ID] [int] NOT NULL,
	[NOMBRE] [VARCHAR](255) NOT NULL,
	[Email] [VARCHAR](255) NOT NULL,
	[Fecha_horaDesbordaje] [DATETIME] NOT NULL,
	[Fecha_horaAbordaje] [DATETIME] NOT NULL
CONSTRAINT [PK_PASAJERO_ID] PRIMARY KEY CLUSTERED 
(
	[PASAJERO_ID] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

INSERT INTO PASAJERO VALUES (1,'PABLO CAMPOSECO','Pablocamp26@hotmail.com',CONVERT(DATETIME,GETDATE()),CONVERT(DATETIME,GETDATE()));

SELECT * FROM PASAJERO;

--DROP TABLE PASAJERO;