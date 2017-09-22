CREATE TABLE [MARCA](
	[MARCA_ID] [int] NOT NULL,
	[NOMBRE] [VARCHAR](255) NOT NULL
CONSTRAINT [PK_MARCA_ID] PRIMARY KEY CLUSTERED 
(
	[MARCA_ID] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

INSERT INTO MARCA VALUES (1,'AIRBUS');

SELECT * FROM MARCA;