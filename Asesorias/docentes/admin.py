from django.contrib import admin
from.models import Docente, Estudiante, Materia, Asesoria, Horario, Programa

# Register your models here.

class DocenteAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'celular', 'email')
    list_display = ('nombre', 'celular', 'email')
    list_filter = ['nombre', 'celular', 'email']
    filter_horizontal = ['materias']

admin.site.register(Docente, DocenteAdmin)

class EstudianteAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre',  'celular', 'email')
    list_display = ('nombre',  'celular', 'email')
    list_filter = ['nombre',  'celular', 'email']
    filter_horizontal = ['materias']
    

admin.site.register(Estudiante, EstudianteAdmin)


class MateriaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'creado')
   # list_display = ('nombre' )
    
admin.site.register(Materia, MateriaAdmin)

class ProgramaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'creado')
   # list_display = ('nombre' )
    
admin.site.register(Programa, ProgramaAdmin)

class HorarioAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('horario', 'creado')
    list_display = ('horario', 'creado')
    
admin.site.register(Horario, HorarioAdmin)

class AsesoriaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    list_display = ('fecha','hora', 'estado', 'tipoSolicitud')
    search_fields= ('fecha','hora', 'estado', 'tipoSolicitud')
    list_filter = ['fecha','hora', 'estado', 'tipoSolicitud', 'docente', 'materia', 'estudiante']
    filter_horizontal = ['materia','docente','estudiante']

admin.site.register(Asesoria, AsesoriaAdmin)






