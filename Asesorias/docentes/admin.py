from django.contrib import admin
from.models import Docente, Estudiante, Materia, Asesoria

# Register your models here.

class DocenteAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'especializacion')
    list_display = ('nombre', 'especializacion', 'materias', 'celular')
   

admin.site.register(Docente, DocenteAdmin)

class EstudianteAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'programa')
    list_display = ('nombre', 'programa', 'materias', 'celular')
    

admin.site.register(Estudiante, EstudianteAdmin)


class MateriaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'programa')
    list_display = ('nombre', 'programa', 'descripcion')
    

admin.site.register(Materia, MateriaAdmin)

class AsesoriaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('fecha', 'estado')
    list_display = ('fecha', 'estado')
  

admin.site.register(Asesoria, AsesoriaAdmin)




