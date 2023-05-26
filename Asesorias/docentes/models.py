from django.db import models

# Create your models here.

class Estudiante(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Nombre")
    programa = models.CharField(max_length=200, verbose_name="Programa")
    materias = models.CharField(max_length=100, verbose_name="Materias")
    celular = models.FloatField(verbose_name="Celular")
    foto = models.CharField(max_length=100, verbose_name="Ruta img")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actialización")

    class Meta: 
        verbose_name = 'Estudiante'
        verbose_name_plural = 'Estudiantes'

    def __str__(self):
        return self.nombre


class Docente(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Nombre")
    especializacion = models.CharField(max_length=200, verbose_name="Especialización")
    materias = models.CharField(max_length=100, verbose_name="Materias")
    celular = models.FloatField(verbose_name="Celular")
    foto = models.CharField(max_length=100, verbose_name="Ruta img")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actialización")

    class Meta: 
        verbose_name = 'Docente'
        verbose_name_plural = 'Docentes'

    def __str__(self):
        return self.nombre


class Materia(models.Model):
    nombre = models.CharField(max_length=100, verbose_name="Materia")
    programa = models.CharField(max_length=100, verbose_name="Prorama")
    descripcion = models.CharField(max_length=100, verbose_name="Descripción")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actialización")

    class Meta: 
        verbose_name = 'Materia'
        verbose_name_plural = 'Materias'
    
    def __str__(self):
        return self.nombre


class Agenda(models.Model):
    docente = models.CharField(max_length=100, verbose_name="docente")
    solicitudes = models.CharField(max_length=100, verbose_name="Solicitudes")
    disponibilidades = models.CharField(max_length=100, verbose_name="Disponibilidad")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actialización")

class EstadoSolicitud(models.Model):
    nombre = models.CharField(max_length=50, verbose_name="Estado")

class Asesoria(models.Model):
    materia = models.ManyToManyField( Materia ,verbose_name="Materia", blank=True, null= True)
    docente = models.ManyToManyField( Docente,verbose_name="Docente", blank=True, null= True)
    estudiante = models.ManyToManyField( Estudiante, verbose_name="Estudiante", blank=True, null= True)
    fecha = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Asesoria")
    estado = models.BooleanField(verbose_name="Estado")
    creado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Creación")
    editado = models.DateTimeField(auto_now_add=True, verbose_name="Fecha de Actialización")

    class Meta: 
        verbose_name = 'Asesoria'
        verbose_name_plural = 'Asesorias'

    








