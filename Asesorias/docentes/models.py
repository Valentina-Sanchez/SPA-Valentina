from django.db import models

# Create your models here.

class Materia(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Materia")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")

    class Meta: 
        verbose_name = 'Materia'
        verbose_name_plural = 'Materias'
    
    def __str__(self):
        return self.nombre
    
class Programa(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Programa")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")

    class Meta: 
        verbose_name = 'Programa'
        verbose_name_plural = 'Programa'
    
    def __str__(self):
        return self.nombre

class Estudiante(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Nombre")
    programa = models.ManyToManyField( Programa, verbose_name="Programa", blank=True, null= True)
    materias = models.ManyToManyField( Materia, verbose_name="Materias", blank=True, null= True)
    celular = models.FloatField(verbose_name="Celular",max_length=10)
    email = models.EmailField(blank=True)
    foto = models.ImageField(upload_to='Documentos/ProyectoCitas/asesorias/Imgs/', height_field=None, width_field=None, max_length=None, verbose_name="Foto")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")

    class Meta: 
        verbose_name = 'Estudiante'
        verbose_name_plural = 'Estudiantes'

    def __str__(self):
        return self.nombre

class Horario(models.Model):
    horario = models.CharField(max_length=50, verbose_name="Horarios", default=" ")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")

    class Meta: 
        verbose_name = 'Horario'
        verbose_name_plural = 'Horarios'
    
    def __str__(self):
        return self.horario

class Docente(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Nombre")
    materias = models.ManyToManyField( Materia, verbose_name="Materias", blank=True, null= True)
    celular = models.FloatField(verbose_name="Celular", max_length=10)
    horarios = models.ManyToManyField(Horario, verbose_name="Horarios", blank=True)
    email = models.EmailField(blank=True)
    biografia = models.TextField(max_length=10000, verbose_name="Biografía", default="0")
    foto = models.ImageField(upload_to='Documentos/ProyectoCitas/asesorias/Imgs/', height_field=None, width_field=None, max_length=None, verbose_name="Foto")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")

    class Meta: 
        verbose_name = 'Docente'
        verbose_name_plural = 'Docentes'

    def __str__(self):
        return self.nombre

class Asesoria(models.Model):
    INVESTIGACION = 'Investigación'
    ACADEMICA = 'Académica'
    CREADA = 'Creada'
    ACEPTADA = 'Aceptada'
    RECHAZADA= 'Rechazada'
    CANCELADA= 'Cancelada'

    opciones = (
        (INVESTIGACION, 'Investigación'),
        (ACADEMICA, 'Académica'),
    )

    opcionesEstado = (
        (CREADA, 'Creada'),
        (ACEPTADA, 'Aceptada'),
        (RECHAZADA, 'Rechazada'),
        (CANCELADA, 'Cancelada'),
    )


    tipoSolicitud = models.CharField(max_length=15, choices=opciones, default=ACADEMICA, verbose_name="Tipo de Asesoria")
    materia = models.ManyToManyField( Materia ,verbose_name="Materia", blank=True, null= True)
    docente = models.ManyToManyField( Docente,verbose_name="Docente", blank=True, null= True)
    estudiante = models.ManyToManyField( Estudiante, verbose_name="Estudiante", blank=True, null= True)
    fecha = models.DateField(verbose_name="Fecha de Asesoria")
    hora =models.TimeField(null=True)
    comentarios = models.TextField(max_length=500, verbose_name="Comentarios")
    estado = models.CharField(max_length=15, choices=opcionesEstado, default=CREADA, verbose_name="Estado")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")

    class Meta: 
        verbose_name = 'Asesoria'
        verbose_name_plural = 'Asesorias'

    def __str__(self):
        return self.tipoSolicitud

    
class BaseConocimiento(models.Model):

    materia = models.ManyToManyField( Materia ,verbose_name="Materia", blank=True, null= True)
    tema = models.CharField(max_length=500, verbose_name="Tema")
    problema = models.CharField(max_length=10000, verbose_name="Problema")
    soluciónP = models.TextField(max_length=10000, verbose_name="Solución Planetada")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actualización")



