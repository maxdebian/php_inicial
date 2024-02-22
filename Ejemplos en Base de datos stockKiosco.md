Base de datos stockKiosco
    Conjunto de tablas
        user
        user_data
        product
        proveedor
        sell


    Tabla user
        id
        username/nickname/name 
        email
        password
        role_id 1
        create_user
    
        id
        username/nickname/name 
        email
        password
        role_id 2
        create_user

        email   
            Varchar


        Role 
        id
        name    

        Role 1 Admin
        Role 2 cliente

        User   n Relacion n   Role



Ingeniero 
Id: 1  Nombre: Juan  dni:32323232
Id: 2  Nombre: Pedro  dni:42323232

Proyecto
id: 10  nombre: Construir Edificio  Monto: 231.312.321.321
id: 15  nombre: Construir Casa  Monto: 312.321.321
id: 13  nombre: Construir Plaza  Monto: 312.321.321

Tareas
id_tarea   id_ing   id_proy   nombreTarea   FechaInicio   FechaFin
1           1       10           Limpiar el piso             hoy             mañana
2           1       10            Cabar            mañana          pasado
3           1       10           Construir contra piso           25/02/2024      25/02/2024
4           2       10           Construir carpeta           26/02/2024      05/03/2024
5           1       15               Cabar         26/02/2024      05/03/2024
6           2       15          Limpiar el piso            hoy             mañana
7           2       10          cabar             mañana          pasado
7           2       13          cabar             26/03/2024      27/03/2024

Select * from tareas;
1           1       10           Limpiar el piso             hoy             mañana
2           1       10            Cabar            mañana          pasado
3           1       10           Construir contra piso           25/02/2024      25/02/2024
4           2       10           Construir carpeta           26/02/2024      05/03/2024
5           1       15               Cabar         26/02/2024      05/03/2024
6           2       15          Limpiar el piso            hoy             mañana
7           2       10          cabar             mañana          pasado
7           2       13          cabar             26/03/2024      27/03/2024



Select * from tareas where id_ing=2
4           2       10           Construir carpeta           26/02/2024      05/03/2024
6           2       15          Limpiar el piso            hoy             mañana
7           2       10          cabar             mañana          pasado
7           2       13          cabar             26/03/2024      27/03/2024

Select nombreTarea,Nombre,nombre from tareas where id_ing=2 (Tabla ingeniero) (Tabla Proyecto)
Pedro             Construir carpeta          Construir Edificio
Pedro             Limpiar el piso            Construir Edificio
Pedro             cabar                      Construir Edificio
Pedro             cabar                      Construir Plaza

Select nombreTarea,Nombre,nombre from tareas where id_ing=2 and nombreTarea='cabar' (Tabla ingeniero) (Tabla Proyecto)
Pedro             cabar                      Construir Edificio
Pedro             cabar                      Construir Plaza


Select nombreTarea,Nombre,nombre from tareas where id_ing=2 and nombreTarea='cabar' limit 50 (Tabla ingeniero) (Tabla Proyecto)
Pedro             cabar                      Construir Edificio





Factura
id_fac
NroFactura
Fecha
Cliente
IVA
id_det_fac
1
2


FacturaDetalle
id_det_fac   codProducto      producto    precio  cantidad
1                  22              manzana     20      1
2                 10              pera        35      5























SELECT 
    TAREA.ID, TAREA.FECHA_INICIO, TAREA.FECHA_TERMINO, TAREA.FECHA_ESTIMADA, PROYECTO.NOMBRE AS NOMBRE_PROYECTO, INGENIERO.NOMBRE AS NOMBRE_INGENIERO
  

    FROM 
    
    TAREA INNER JOIN INGENIERO ON TAREA.ID_INGENIERO = INGENIERO.ID
                                    TAREA.ID_ING = INGENIERO.ID
    
    
    INNER JOIN PROYECTO ON TAREA.ID_PROYECTO = PROYECTO.ID
                            TAREA.ID_PROY   = PROYECTO.ID
        

     --------------------   
        
    <!-- WHERE INGENIERO.NOMBRE = 'NOMBRE DEL INGENIERO'; -->
    WHERE INGENIERO.ID = 2;



ID      FECHA_INICIO        FECHA_TERMINO       FECHA_ESTIMADA      NOMBRE_PROYECTO     NOMBRE_INGENIERO
6       01/02/2022             01/02/2024           01/01/2024          EDIFICIOS           JUAN
8       01/02/2020             01/02/2022           01/01/2022          CASAS               JUAN

