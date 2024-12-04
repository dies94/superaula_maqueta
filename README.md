# superaula_maqueta
<html><head><base href="/" /><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Panel de Administración</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    display: flex;
    min-height: 100vh;
    background: #f4f6f9;
}

.sidebar {
    width: 250px;
    background: #343a40;
    color: white;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
}

.sidebar .logo {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #4f5962;
    margin-bottom: 15px;
}

.sidebar .menu {
    list-style: none;
    flex-grow: 1;
}

.sidebar .menu li a {
    color: #c2c7d0;
    text-decoration: none;
    padding: 12px 20px;
    display: block;
    transition: 0.3s;
}

.sidebar .menu li a.active {
    background: #494e53;
    color: white;
}

.sidebar .menu li a:hover {
    background: #494e53;
    color: white;
}

.logout {
    padding: 20px;
    border-top: 1px solid #4f5962;
}

.logout a {
    color: #c2c7d0;
    text-decoration: none;
    display: block;
    padding: 10px;
    transition: 0.3s;
}

.logout a:hover {
    background: #494e53;
    color: white;
}

.main-content {
    flex: 1;
    padding: 20px;
}

.table-container {
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
}

.actions {
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn {
    padding: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
}

.btn-primary {
    background: #007bff;
    color: white;
}

.btn-success {
    background: #28a745;
    color: white;
}

.btn-info {
    background: #17a2b8;
    color: white;
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-sm {
    width: 100%; /* Make buttons fill their container */
    margin: 5px 0; /* Add some vertical spacing between buttons */
    min-width: 70px; /* Set a minimum width */
    box-sizing: border-box; /* Include padding in width calculation */
}

.search-box {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 300px;
}

.admin-panels {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.panel-section {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.panel-section h3 {
    margin-bottom: 20px;
    color: #343a40;
    font-size: 1.5em;
}

.panel-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background: #f8f9fa;
}

#alumnos-table td:first-child,
#access-table td:first-child,
#taller-table td:first-child {
    width: 100px; /* Set fixed width for button columns */
    padding: 8px;
}

#alumnos-table td {
    font-size: 0.9rem;
}

#alumnos-table th {
    background: #f4f4f4;
    font-weight: 600;
}

.pagination {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 10px;
}

.pagination button {
    padding: 8px 12px;
    border: 1px solid #ddd;
    background: white;
    cursor: pointer;
}

.pagination button:hover {
    background: #f8f9fa;
}

.content-section {
    display: none;
}

.content-section.active {
    display: block;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 90%;
    max-width: 600px;
    max-height: 90vh;
    overflow-y: auto;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #ddd;
}

.close-modal {
    cursor: pointer;
    font-size: 24px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.form-group select[multiple] {
    height: 100px;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
}

textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    resize: vertical;
}

.form-group textarea {
    min-height: 80px;
}

#alumnos-asignados-table .btn-sm {
    width: 100%;
    margin: 0;
}

#alumnos-asignados-table td:first-child {
    min-width: 80px;
    padding: 8px;
}

  .admin-panel {
    max-width: 1000px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    overflow: hidden;
  }
  .header {
    background-color: #3498db;
    color: white;
    padding: 20px;
    text-align: center;
  }
  .section {
    padding: 20px;
    border-bottom: 1px solid #e0e0e0;
  }
  h2 {
    color: #2c3e50;
    margin-top: 0;
    text-align: center;
  }
  .superAula {
    color: #fdfeff;
    margin-top: 0;
    text-align: center;
  }
  .button-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
  }
  .button {
    background-color: #fff;
    border: 2px solid #3498db;
    border-radius: 10px;
    padding: 15px;
    width: 150px;
    height: 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .button:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .button img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
  }
  .button span {
    color: #2c3e50;
    font-weight: bold;
    text-align: center;
  }
</style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2 class="superAula">Super Aula</h2>
        </div>
        <ul class="menu">
            <li><a href="#admin" class="nav-link active" data-section="admin">Panel de Administración</a></li>
            <li><a href="#alumnos" class="nav-link" data-section="alumnos">Todos los Alumnos</a></li>
            <li><a href="#alumnos-asignados" class="nav-link" data-section="alumnos-asignados">Alumnos Asignados</a></li>
            <li><a href="#informes" class="nav-link" data-section="informes">Informes</a></li>
            <li><a href="#accesos" class="nav-link" data-section="accesos">Accesos</a></li>
            <li><a href="#taller" class="nav-link" data-section="taller">Taller</a></li>
        </ul>
        <div class="logout">
            <a href="#" id="logout-btn">Cerrar Sesión</a>
        </div>
    </div>

    <div class="main-content">
        <div id="admin-section" class="content-section active">
            <div class="table-container">
                <div class="actions">
                    <div>
                        
                    </div>
                    <input type="text" class="search-box" placeholder="Buscar..." id="search-input">
                </div>
                <div class="admin-panel">
                    
                    <div class="section">
                      <h2>Alumnos</h2>
                      <div class="button-container">
                        <button class="button nav-link" data-section="alumnos"  >
                          <img src="https://cdn-icons-png.flaticon.com/512/948/948256.png" alt="Icono de lista de alumnos">
                          <span>Ver Alumnos</span>
                        </button>
                        <button class="button nav-link" data-section="alumnos" id="btn-add-alumno">
                          <img src="https://cdn-icons-png.flaticon.com/512/3658/3658773.png" alt="Icono de agregar alumno">
                          <span>Agregar Alumno</span>
                        </button>
                        <button class="button" data-section="alumnos" id="btn-add-informe">
                          <img src="https://cdn-icons-png.flaticon.com/512/1150/1150592.png" alt="Icono de agregar información">
                          <span>Agregar Información</span>
                        </button>
                      </div>
                    </div>
                    
                    <div class="section">
                      <h2>Docentes</h2>
                      <div class="button-container">
                        <button class="button nav-link" data-section="accesos" >
                          <img src="https://cdn-icons-png.flaticon.com/512/9291/9291556.png" alt="Icono de lista de docentes">
                          <span>Ver Docentes</span>
                        </button>
                        <button class="button" data-section="alumnos" id="btn-add-access">
                          <img src="https://cdn-icons-png.flaticon.com/512/3658/3658773.png" alt="Icono de agregar docente">
                          <span>Agregar Docente</span>
                        </button>
                      </div>
                    </div>
                  </div>

                
            </div>
        </div>

        <div id="accesos-section" class="content-section">
            <div class="table-container">
                <div class="actions">
                    <div>
                        <button class="btn btn-primary" id="btn-add-access">Agregar</button>
                        <button class="btn btn-success" id="btn-copy-access">Copiar</button>
                        <button class="btn btn-success" id="btn-excel-access">Excel</button>
                        <button class="btn btn-success" id="btn-csv-access">CSV</button>
                    </div>
                    <input type="text" class="search-box" placeholder="Buscar..." id="search-input-access">
                </div>

                <table id="access-table">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Usuario</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>IP</th>
                            <th>Dispositivo</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="display: flex; flex-direction: column; gap: 5px;">
                                <button class="btn btn-primary btn-sm" onclick="editAccess(1)">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteAccess(1)">Dar de baja</button>
                            </td>
                            <td>diego.e</td>
                            <td>2024-01-22</td>
                            <td>08:30:15</td>
                            <td>192.168.1.100</td>
                            <td>Chrome/Windows</td>
                            <td>Activo</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button id="prev-page-access">Anterior</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button id="next-page-access">Siguiente</button>
                </div>
            </div>
        </div>

        <div id="alumnos-section" class="content-section">
            <div class="table-container">
                <div class="actions">
                    <div>
                        <button class="btn btn-primary" id="btn-add-alumno">Agregar</button>
                        <button class="btn btn-success" id="btn-copy-alumno">Copiar</button>
                        <button class="btn btn-success" id="btn-excel-alumno">Excel</button>
                        <button class="btn btn-success" id="btn-csv-alumno">CSV</button>
                    </div>
                    <input type="text" class="search-box" placeholder="Buscar..." id="search-input-alumno">
                </div>

                <table id="alumnos-table">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo Documento</th>
                            <th>Nro Documento</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Curso</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="display: flex; flex-direction: column; gap: 5px;">
                                <button class="btn btn-primary btn-sm" id="editAlumno" onclick="editAlumno(1)">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteAlumno(1)">Dar de baja</button>
                            </td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>DNI</td>
                            <td>12345678</td>
                            <td>Calle Principal 123</td>
                            <td>+1234567890</td>
                            <td>juan.perez@email.com</td>
                            <td>1° Año</td>
                            <td>Activo</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button id="prev-page-alumno">Anterior</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button id="next-page-alumno">Siguiente</button>
                </div>
            </div>
        </div>

        <div id="alumnos-asignados-section" class="content-section">
            <div class="table-container">
                <div class="actions">
                    <div>
                        <button class="btn btn-primary" id="btn-add-asignacion">Agregar</button>
                        <button class="btn btn-success" id="btn-copy-asignacion">Copiar</button>
                        <button class="btn btn-success" id="btn-excel-asignacion">Excel</button>
                        <button class="btn btn-success" id="btn-csv-asignacion">CSV</button>
                    </div>
                    <input type="text" class="search-box" placeholder="Buscar..." id="search-input-asignacion">
                </div>

                <table id="alumnos-asignados-table">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Alumno</th>
                            <th>Usuario Asignado</th>
                            <th>Rol Usuario</th>
                            <th>Fecha Asignación</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="display: flex; flex-direction: column; gap: 5px;">
                                <button class="btn btn-primary btn-sm" onclick="editAsignacion(1)">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteAsignacion(1)">Dar de baja</button>
                            </td>
                            <td>Juan Pérez</td>
                            <td>diego.estigarribia</td>
                            <td>Docente</td>
                            <td>2024-01-22</td>
                            <td>Activo</td>
                            <td>Asignación principal</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button id="prev-page-asignacion">Anterior</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button id="next-page-asignacion">Siguiente</button>
                </div>
            </div>
        </div>

        <div id="informes-section" class="content-section">
            <div class="table-container">
                <div class="actions">
                    <div>
                        <button class="btn btn-primary" id="btn-add-informe">Agregar</button>
                        <button class="btn btn-success" id="btn-copy-informe">Copiar</button>
                        <button class="btn btn-success" id="btn-excel-informe">Excel</button>
                        <button class="btn btn-success" id="btn-csv-informe">CSV</button>
                    </div>
                    <input type="text" class="search-box" placeholder="Buscar..." id="search-input-informe">
                </div>

                <table id="informes-table">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Título Informe</th>
                            <th>Usuario</th>
                            <th>Fecha Creación</th>
                            <th>Última Modificación</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="deleteInforme(1)">Dar de baja</button>
                            </td>
                            <td>Informe Mensual Alumnos</td>
                            <td>diego.estigarribia</td>
                            <td>2024-01-22</td>
                            <td>2024-01-23</td>
                            <td>Rendimiento</td>
                            <td>Completado</td>
                            <td>Informe detallado del rendimiento mensual</td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="deleteInforme(2)">Dar de baja</button>
                            </td>
                            <td>Evaluación Docente</td>
                            <td>maria.lopez</td>
                            <td>2024-01-20</td>
                            <td>2024-01-21</td>
                            <td>Evaluación</td>
                            <td>En Revisión</td>
                            <td>Evaluación trimestral de docentes</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button id="prev-page-informe">Anterior</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button id="next-page-informe">Siguiente</button>
                </div>
            </div>
        </div>

        <div id="taller-section" class="content-section">
            <div class="table-container">
                <div class="actions">
                    <div>
                        <button class="btn btn-primary" id="btn-add-taller">Agregar</button>
                        <button class="btn btn-success" id="btn-copy-taller">Copiar</button>
                        <button class="btn btn-success" id="btn-excel-taller">Excel</button>
                        <button class="btn btn-success" id="btn-csv-taller">CSV</button>
                    </div>
                    <input type="text" class="search-box" placeholder="Buscar..." id="search-input-taller">
                </div>

                <table id="taller-table">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Nombre del Taller</th>
                            <th>Año de Creación</th>
                            <th>Alumno</th>
                            <th>Fecha de Inscripción</th>
                            <th>Horario</th>
                            <th>Instructor</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="display: flex; flex-direction: column; gap: 5px;">
                                <button class="btn btn-primary btn-sm" onclick="editTaller(1)">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteTaller(1)">Dar de baja</button>
                            </td>
                            <td>Taller de Arte</td>
                            <td>2023</td>
                            <td>Juan Pérez</td>
                            <td>2024-01-15</td>
                            <td>Lunes y Miércoles 14:00-16:00</td>
                            <td>María González</td>
                            <td>Activo</td>
                        </tr>
                        <tr>
                            <td style="display: flex; flex-direction: column; gap: 5px;">
                                <button class="btn btn-primary btn-sm" onclick="editTaller(2)">Editar</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteTaller(2)">Dar de baja</button>
                            </td>
                            <td>Taller de Música</td>
                            <td>2022</td>
                            <td>Ana Silva</td>
                            <td>2024-01-10</td>
                            <td>Martes y Jueves 15:00-17:00</td>
                            <td>Carlos Rodríguez</td>
                            <td>Activo</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button id="prev-page-taller">Anterior</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button id="next-page-taller">Siguiente</button>
                </div>
            </div>
        </div>

    </div>

    <div id="access-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Nuevo Acceso</h2>
                <span class="close-modal">&times;</span>
            </div>
            <form id="access-form">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="tipo-documento">Tipo Documento:</label>
                    <select id="tipo-documento" name="tipo-documento" required>
                        <option value="">Seleccione...</option>
                        <option value="DNI">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="CI">CI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nro-documento">Nro Documento:</label>
                    <input type="text" id="nro-documento" name="nro-documento" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="permisos">Permisos:</label>
                    <select id="permisos" name="permisos" multiple required>
                        <option value="lectura">Lectura</option>
                        <option value="escritura">Escritura</option>
                        <option value="administracion">Administración</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rol">Rol:</label>
                    <select id="rol" name="rol" required>
                        <option value="">Seleccione...</option>
                        <option value="admin">Administrador</option>
                        <option value="docente">Docente</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary close-modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="informe-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Nuevo Informe</h2>
                <span class="close-modal">&times;</span>
            </div>
            <form id="informe-form">
                <div class="form-group">
                    <label for="titulo-informe">Título del Informe:</label>
                    <input type="text" id="titulo-informe" name="titulo-informe" required>
                </div>
                <div class="form-group">
                    <label for="tipo-informe">Tipo de Informe:</label>
                    <select id="tipo-informe" name="tipo-informe" required>
                        <option value="">Seleccione...</option>
                        <option value="Rendimiento">Rendimiento</option>
                        <option value="Evaluación">Evaluación</option>
                        <option value="Progreso">Progreso</option>
                        <option value="Comportamiento">Comportamiento</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion-informe">Descripción:</label>
                    <textarea id="descripcion-informe" name="descripcion-informe" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="fecha-informe">Fecha del Informe:</label>
                    <input type="date" id="fecha-informe" name="fecha-informe" required>
                </div>
                <div class="form-group">
                    <label for="alumno-informe">Alumno:</label>
                    <select id="alumno-informe" name="alumno-informe" required>
                        <option value="">Seleccione...</option>
                        <option value="1">Juan Pérez</option>
                        <option value="2">Ana Silva</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="docente-informe">Docente:</label>
                    <select id="docente-informe" name="docente-informe" required>
                        <option value="">Seleccione...</option>
                        <option value="1">María González</option>
                        <option value="2">Carlos Rodríguez</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="estado-informe">Estado:</label>
                    <select id="estado-informe" name="estado-informe" required>
                        <option value="">Seleccione...</option>
                        <option value="En Proceso">En Proceso</option>
                        <option value="Completado">Completado</option>
                        <option value="En Revisión">En Revisión</option>
                        <option value="Archivado">Archivado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="observaciones-informe">Observaciones:</label>
                    <textarea id="observaciones-informe" name="observaciones-informe" rows="4"></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary close-modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="alumno-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Nuevo Alumno</h2>
                <span class="close-modal">&times;</span>
            </div>
            <form id="alumno-form">
                <div class="form-group">
                    <label for="alumno-nombre">Nombre:</label>
                    <input type="text" id="alumno-nombre" name="alumno-nombre" required>
                </div>
                <div class="form-group">
                    <label for="alumno-apellido">Apellido:</label>
                    <input type="text" id="alumno-apellido" name="alumno-apellido" required>
                </div>
                <div class="form-group">
                    <label for="alumno-tipo-documento">Tipo Documento:</label>
                    <select id="alumno-tipo-documento" name="alumno-tipo-documento" required>
                        <option value="">Seleccione...</option>
                        <option value="DNI">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="CI">CI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alumno-nro-documento">Nro Documento:</label>
                    <input type="text" id="alumno-nro-documento" name="alumno-nro-documento" required>
                </div>
                <div class="form-group">
                    <label for="alumno-direccion">Dirección:</label>
                    <input type="text" id="alumno-direccion" name="alumno-direccion" required>
                </div>
                <div class="form-group">
                    <label for="alumno-telefono">Teléfono:</label>
                    <input type="tel" id="alumno-telefono" name="alumno-telefono" required>
                </div>
                <div class="form-group">
                    <label for="alumno-email">Email:</label>
                    <input type="email" id="alumno-email" name="alumno-email" required>
                </div>
                <div class="form-group">
                    <label for="alumno-login">Login:</label>
                    <input type="text" id="alumno-login" name="alumno-login" required>
                </div>
                <div class="form-group">
                    <label for="alumno-password">Password:</label>
                    <input type="password" id="alumno-password" name="alumno-password" required>
                </div>
                <div class="form-group">
                    <label for="alumno-permisos">Permisos:</label>
                    <select id="alumno-permisos" name="alumno-permisos" multiple required>
                        <option value="lectura">Lectura</option>
                        <option value="escritura">Escritura</option>
                        <option value="administracion">Administración</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alumno-rol">Rol:</label>
                    <select id="alumno-rol" name="alumno-rol" required>
                        <option value="">Seleccione...</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary close-modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="asignacion-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Nueva Asignación</h2>
                <span class="close-modal">&times;</span>
            </div>
            <form id="asignacion-form">
                <div class="form-group">
                    <label for="alumno-select">Alumno:</label>
                    <select id="alumno-select" name="alumno-select" required>
                        <option value="">Seleccione un alumno...</option>
                        <option value="1">Juan Pérez</option>
                        <option value="2">Ana Silva</option>
                        <option value="3">Carlos López</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="usuario-select">Usuario a Asignar:</label>
                    <select id="usuario-select" name="usuario-select" required>
                        <option value="">Seleccione un usuario...</option>
                        <option value="1">diego.estigarribia</option>
                        <option value="2">maria.gonzalez</option>
                        <option value="3">carlos.rodriguez</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rol-usuario">Rol del Usuario:</label>
                    <select id="rol-usuario" name="rol-usuario" required>
                        <option value="">Seleccione un rol...</option>
                        <option value="Docente">Docente</option>
                        <option value="Tutor">Tutor</option>
                        <option value="Administrativo">Administrativo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha-asignacion">Fecha de Asignación:</label>
                    <input type="date" id="fecha-asignacion" name="fecha-asignacion" required>
                </div>
                <div class="form-group">
                    <label for="estado-asignacion">Estado:</label>
                    <select id="estado-asignacion" name="estado-asignacion" required>
                        <option value="">Seleccione un estado...</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                        <option value="Pendiente">Pendiente</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="observaciones-asignacion">Observaciones:</label>
                    <textarea id="observaciones-asignacion" name="observaciones-asignacion" rows="4"></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary close-modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="taller-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Registrar Nuevo Taller</h2>
                <span class="close-modal">&times;</span>
            </div>
            <form id="taller-form">
                <div class="form-group">
                    <label for="nombre-taller">Nombre del Taller:</label>
                    <input type="text" id="nombre-taller" name="nombre-taller" required>
                </div>
                <div class="form-group">
                    <label for="anio-creacion">Año de Creación:</label>
                    <input type="number" id="anio-creacion" name="anio-creacion" min="2000" max="2099" required>
                </div>
                <div class="form-group">
                    <label for="alumno-taller">Alumno:</label>
                    <select id="alumno-taller" name="alumno-taller" required>
                        <option value="">Seleccione un alumno...</option>
                        <option value="1">Juan Pérez</option>
                        <option value="2">Ana Silva</option>
                        <option value="3">Carlos López</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha-inscripcion">Fecha de Inscripción:</label>
                    <input type="date" id="fecha-inscripcion" name="fecha-inscripcion" required>
                </div>
                <div class="form-group">
                    <label for="horario-taller">Horario:</label>
                    <input type="text" id="horario-taller" name="horario-taller" placeholder="Ej: Lunes y Miércoles 14:00-16:00" required>
                </div>
                <div class="form-group">
                    <label for="instructor-taller">Instructor:</label>
                    <select id="instructor-taller" name="instructor-taller" required>
                        <option value="">Seleccione un instructor...</option>
                        <option value="1">María González</option>
                        <option value="2">Carlos Rodríguez</option>
                        <option value="3">Laura Martínez</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="estado-taller">Estado:</label>
                    <select id="estado-taller" name="estado-taller" required>
                        <option value="">Seleccione un estado...</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                        <option value="En Pausa">En Pausa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion-taller">Descripción:</label>
                    <textarea id="descripcion-taller" name="descripcion-taller" rows="4"></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary close-modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navigation functionality
    const navLinks = document.querySelectorAll('.nav-link');
    const contentSections = document.querySelectorAll('.content-section');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            navLinks.forEach(l => l.classList.remove('active'));
            contentSections.forEach(s => s.classList.remove('active'));
            
            this.classList.add('active');
            
            const sectionId = this.getAttribute('data-section');
            document.getElementById(`${sectionId}-section`).classList.add('active');
        });
    });

    // Search functionality for both tables
    ['search-input', 'search-input-access', 'search-input-alumno', 'search-input-asignacion', 'search-input-informe', 'search-input-taller'].forEach(id => {
        const searchInput = document.getElementById(id);
        const tableId = id === 'search-input' ? 'users-table' : id === 'search-input-access' ? 'access-table' : id === 'search-input-alumno' ? 'alumnos-table' : id === 'search-input-asignacion' ? 'alumnos-asignados-table' : id === 'search-input-informe' ? 'informes-table' : 'taller-table';
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll(`#${tableId} tbody tr`);
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    });

    // Button functionalities for Admin section
    ['add'].forEach(action => {
    const btn = document.getElementById(`btn-${action}`);
    if (btn) {
        btn.addEventListener('click', function() {
            alert(`Funcionalidad de ${action} en Panel de Administración`);
        });
    }
    });

    // Button functionalities for Access section
    ['add-access', 'copy-access', 'excel-access', 'csv-access'].forEach(action => {
        document.getElementById(`btn-${action}`).addEventListener('click', function() {
            alert(`Funcionalidad de ${action.split('-')[0]} en Accesos`);
        });
    });

    // Button functionalities for Alumnos section
    ['add-alumno', 'copy-alumno', 'excel-alumno', 'csv-alumno'].forEach(action => {
        document.getElementById(`btn-${action}`).addEventListener('click', function() {
            alert(`Funcionalidad de ${action.split('-')[0]} en Alumnos`);
        });
    });

    // Button functionalities for Alumnos Asignados section
    ['add-asignacion', 'copy-asignacion', 'excel-asignacion', 'csv-asignacion'].forEach(action => {
        document.getElementById(`btn-${action}`).addEventListener('click', function() {
            alert(`Funcionalidad de ${action.split('-')[0]} en Alumnos Asignados`);
        });
    });

    // Button functionalities for Informes section
    ['add-informe', 'copy-informe', 'excel-informe', 'csv-informe'].forEach(action => {
    const btn = document.getElementById(`btn-${action}`);
    if (btn) {
        btn.addEventListener('click', function() {
            alert(`Funcionalidad de ${action.split('-')[0]} en Informes`);
        });
    }
    });

    // Button functionalities for Taller section
    ['add-taller', 'copy-taller', 'excel-taller', 'csv-taller'].forEach(action => {
        document.getElementById(`btn-${action}`).addEventListener('click', function() {
            alert(`Funcionalidad de ${action.split('-')[0]} en Talleres`);
        });
    });

    // Search functionality for Taller table
    document.getElementById('search-input-taller').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('#taller-table tbody tr');
        
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? '' : 'none';
        });
    });

    // Pagination functionality for Taller section
    ['prev-page-taller', 'next-page-taller'].forEach(id => {
        document.getElementById(id).addEventListener('click', function() {
            alert(id.includes('prev') ? 'Página anterior' : 'Página siguiente');
        });
    });

    // Student management functions
    window.viewStudents = function() {
        alert('Visualizando lista de alumnos');
    };

    window.addStudent = function() {
        alert('Abriendo formulario para agregar alumno');
    };

    window.editStudent = function() {
        alert('Abriendo formulario para editar alumno');
    };

    window.deleteStudent = function() {
        alert('Confirmar dar de baja de alumno');
    };

    window.addStudentInfo = function() {
        alert('Abriendo formulario para agregar información del alumno');
    };

    // CRUD functions for Alumnos
    window.editAlumno = function(id) {
        const alumnoModal = document.getElementById('alumno-modal');
        const modalTitle = alumnoModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Editar Alumno';
        
        // Here you would typically fetch the student data using the ID
        // For demonstration, pre-filling with example data
        document.getElementById('alumno-nombre').value = 'Juan';
        document.getElementById('alumno-apellido').value = 'Pérez';
        document.getElementById('alumno-tipo-documento').value = 'DNI';
        document.getElementById('alumno-nro-documento').value = '12345678';
        document.getElementById('alumno-direccion').value = 'Calle Principal 123';
        document.getElementById('alumno-telefono').value = '+1234567890';
        document.getElementById('alumno-email').value = 'juan.perez@email.com';
        document.getElementById('alumno-login').value = 'juan.perez';
        // Don't pre-fill password for security
        document.getElementById('alumno-password').value = '';
        
        // Pre-select permissions
        const permisosSelect = document.getElementById('alumno-permisos');
        Array.from(permisosSelect.options).forEach(option => {
            option.selected = ['lectura'].includes(option.value);
        });
        
        document.getElementById('alumno-rol').value = 'estudiante';
        
        // Show the modal
        alumnoModal.style.display = 'flex';
        
        // Update form submission handling for edit mode
        const alumnoForm = document.getElementById('alumno-form');
        alumnoForm.onsubmit = function(e) {
            e.preventDefault();
            const formData = new FormData(alumnoForm);
            const data = Object.fromEntries(formData.entries());
            
            // Here you would typically send the updated data to your server
            console.log('Updating student data:', data);
            
            alert('Alumno actualizado exitosamente');
            alumnoModal.style.display = 'none';
        };
    };
     // Modal functionality for Alumnos
     const alumnoModal = document.getElementById('alumno-modal');
    const btnAddAlumno = document.getElementById('btn-add-alumno');
    const alumnoForm = document.getElementById('alumno-form');

    // Show modal when Add button is clicked
    btnAddAlumno.addEventListener('click', function() {
        alumnoModal.style.display = 'flex';
    });

    // Close modal when close button or cancel is clicked
    alumnoModal.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', function() {
            alumnoModal.style.display = 'none';
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === alumnoModal) {
            alumnoModal.style.display = 'none';
        }
    });

    window.editAsignacion = function(id) {
        const asignacionModal = document.getElementById('asignacion-modal');
        const modalTitle = asignacionModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Editar Asignación';
        
        // Here you would typically fetch the assignment data using the ID
        // For demonstration, pre-filling with example data
        document.getElementById('alumno-select').value = '1'; // Juan Pérez
        document.getElementById('usuario-select').value = '1'; // diego.estigarribia
        document.getElementById('rol-usuario').value = 'Docente';
        document.getElementById('fecha-asignacion').value = '2024-01-22';
        document.getElementById('estado-asignacion').value = 'Activo';
        document.getElementById('observaciones-asignacion').value = 'Asignación principal';
        
        // Show the modal
        asignacionModal.style.display = 'flex';
        
        // Update form submission handling for edit mode
        const asignacionForm = document.getElementById('asignacion-form');
        asignacionForm.onsubmit = function(e) {
            e.preventDefault();
            const formData = new FormData(asignacionForm);
            const data = Object.fromEntries(formData.entries());
            
            // Here you would typically send the updated data to your server
            console.log('Updating assignment data:', data);
            
            alert('Asignación actualizada exitosamente');
            asignacionModal.style.display = 'none';
        };
    };

    // Modal functionality for Asignaciones
    const asignacionModal = document.getElementById('asignacion-modal');
    const btnAddAsignacion = document.getElementById('btn-add-asignacion');
    const asignacionForm = document.getElementById('asignacion-form');

    // Show modal when Add button is clicked
    btnAddAsignacion.addEventListener('click', function() {
        asignacionModal.style.display = 'flex';
    });

    // Close modal when close button or cancel is clicked
    asignacionModal.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', function() {
            asignacionModal.style.display = 'none';
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === asignacionModal) {
            asignacionModal.style.display = 'none';
        }
    });

    // Update existing modal functionality to reset title for new students
    document.getElementById('btn-add-alumno').addEventListener('click', function() {
        const alumnoModal = document.getElementById('alumno-modal');
        const modalTitle = alumnoModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Registrar Nuevo Alumno';
        document.getElementById('alumno-form').reset();
        alumnoModal.style.display = 'flex';
    });
    
    // Logout functionality
    document.getElementById('logout-btn').addEventListener('click', function(e) {
        e.preventDefault();
        if(confirm('¿Está seguro que desea cerrar sesión?')) {
            window.location.href = this.href;
        }
    });

    // Modal functionality for Access
    const accessModal = document.getElementById('access-modal');
    const btnAddAccess = document.getElementById('btn-add-access');
    const closeButtons = document.querySelectorAll('.close-modal');
    const accessForm = document.getElementById('access-form');

    // Show modal when Add button is clicked
    btnAddAccess.addEventListener('click', function() {
        const modalTitle = accessModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Registrar Nuevo Usuario';
        accessForm.reset();
        accessModal.style.display = 'flex';
    });

    // Close modal when close button or cancel is clicked
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            accessModal.style.display = 'none';
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === accessModal) {
            accessModal.style.display = 'none';
        }
    });

    // Handle form submission for Access
    accessForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Collect form data
        const formData = new FormData(accessForm);
        const data = Object.fromEntries(formData.entries());
        
        // Here you would typically send the data to your server
        console.log('Form submitted with data:', data);
        
        // For demonstration, show success message and close modal
        alert('Usuario registrado exitosamente');
        accessModal.style.display = 'none';
        accessForm.reset();
    });

    // Edit function for Access
    window.editAccess = function(id) {
        const accessModal = document.getElementById('access-modal');
        const modalTitle = accessModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Editar Usuario';
        
        // Here you would typically fetch the user data using the ID
        // For demonstration, pre-filling with example data
        document.getElementById('nombre').value = 'Diego';
        document.getElementById('apellido').value = 'Estigarribia';
        document.getElementById('tipo-documento').value = 'DNI';
        document.getElementById('nro-documento').value = '12345678';
        document.getElementById('direccion').value = 'Calle Principal 123';
        document.getElementById('email').value = 'diego.e@email.com';
        document.getElementById('login').value = 'diego.e';
        // Don't pre-fill password for security
        document.getElementById('password').value = '';
        
        // Pre-select permissions
        const permisosSelect = document.getElementById('permisos');
        Array.from(permisosSelect.options).forEach(option => {
            option.selected = ['lectura', 'escritura'].includes(option.value);
        });
        
        document.getElementById('rol').value = 'admin';
        
        // Show the modal
        accessModal.style.display = 'flex';
        
        // Update form submission handling for edit mode
        accessForm.onsubmit = function(e) {
            e.preventDefault();
            const formData = new FormData(accessForm);
            const data = Object.fromEntries(formData.entries());
            
            // Here you would typically send the updated data to your server
            console.log('Updating user data:', data);
            
            alert('Usuario actualizado exitosamente');
            accessModal.style.display = 'none';
        };
    };

    // Edit Taller function
    window.editTaller = function(id) {
        const tallerModal = document.getElementById('taller-modal');
        const modalTitle = tallerModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Editar Taller';
        
        // Pre-fill form with example data (in a real application, you would fetch this data using the id)
        document.getElementById('nombre-taller').value = 'Taller de Arte';
        document.getElementById('anio-creacion').value = '2023';
        document.getElementById('alumno-taller').value = '1'; // Assuming '1' is Juan Pérez's ID
        document.getElementById('fecha-inscripcion').value = '2024-01-15';
        document.getElementById('horario-taller').value = 'Lunes y Miércoles 14:00-16:00';
        document.getElementById('instructor-taller').value = '1'; // Assuming '1' is María González's ID
        document.getElementById('estado-taller').value = 'Activo';
        document.getElementById('descripcion-taller').value = 'Taller de arte donde se desarrollan habilidades creativas';
        
        // Show the modal
        tallerModal.style.display = 'flex';
        
        // Update form submission handling for edit mode
        const tallerForm = document.getElementById('taller-form');
        tallerForm.onsubmit = function(e) {
            e.preventDefault();
            const formData = new FormData(tallerForm);
            const data = Object.fromEntries(formData.entries());
            
            // Here you would typically send the updated data to your server
            console.log('Updating taller data:', data);
            
            alert('Taller actualizado exitosamente');
            tallerModal.style.display = 'none';
        };
    };

    // Modal functionality for Informes
    const informeModal = document.getElementById('informe-modal');
    const btnAddInforme = document.getElementById('btn-add-informe');
    const informeForm = document.getElementById('informe-form');

    // Show modal when Add button is clicked
    btnAddInforme.addEventListener('click', function() {
        informeModal.style.display = 'flex';
    });

    // Close modal when close button or cancel is clicked
    informeModal.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', function() {
            informeModal.style.display = 'none';
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === informeModal) {
            informeModal.style.display = 'none';
        }
    });

    // Handle form submission for Informes
    informeForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Collect form data
        const formData = new FormData(informeForm);
        const data = Object.fromEntries(formData.entries());
        
        // Here you would typically send the data to your server
        console.log('Informe form submitted with data:', data);
        
        // For demonstration, show success message and close modal
        alert('Informe registrado exitosamente');
        informeModal.style.display = 'none';
        informeForm.reset();
    });


    // Add Taller functionality
    document.getElementById('btn-add-taller').addEventListener('click', function() {
        const tallerModal = document.getElementById('taller-modal');
        const modalTitle = tallerModal.querySelector('.modal-header h2');
        modalTitle.textContent = 'Registrar Nuevo Taller';
        document.getElementById('taller-form').reset();
        tallerModal.style.display = 'flex';
    });

    // Close modal functionality
    const tallerModal = document.getElementById('taller-modal');
    tallerModal.querySelector('.close-modal').addEventListener('click', function() {
        tallerModal.style.display = 'none';
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === tallerModal) {
            tallerModal.style.display = 'none';
        }
    });
});
</script>

</body></html>
