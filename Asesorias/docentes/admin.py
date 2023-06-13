from django.contrib import admin
from.models import Docente, Estudiante, Materia, Asesoria

# Register your models here.

class DocenteAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'celular', 'email')
    list_display = ('nombre', 'celular', 'email')
    filter_horizontal = ['materias']
    
   

admin.site.register(Docente, DocenteAdmin)

class EstudianteAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'programa', 'celular', 'email')
    list_display = ('nombre', 'programa', 'celular', 'email')
    

admin.site.register(Estudiante, EstudianteAdmin)


class MateriaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
   # search_fields = ('nombre')
   # list_display = ('nombre' )
    

admin.site.register(Materia, MateriaAdmin)

class AsesoriaAdmin(admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('fecha', 'estado')
    list_display = ('fecha','hora', 'estado')

admin.site.register(Asesoria, AsesoriaAdmin)




