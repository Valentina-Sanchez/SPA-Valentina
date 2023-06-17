from django.contrib import admin
from import_export import resources
from import_export.admin import ImportExportModelAdmin
from.models import Docente, Estudiante, Materia, Asesoria, Horario, Programa, BaseConocimiento

# Register your models here.

class DocenteResource(resources.ModelResource): 
    class Meta:
       model = Docente  

class DocenteAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'celular', 'email')
    list_display = ('nombre', 'celular', 'email')
    list_filter = ['nombre', 'celular', 'email']
    resourceClass = DocenteResource
    filter_horizontal = ['materias']

admin.site.register(Docente, DocenteAdmin)

class EstudianteResource(resources.ModelResource): 
    class Meta:
       model = Estudiante 
class EstudianteAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre',  'celular', 'email')
    list_display = ('nombre',  'celular', 'email')
    resourceClass = EstudianteResource
    list_filter = ['nombre',  'celular', 'email']
    filter_horizontal = ['materias']
    

admin.site.register(Estudiante, EstudianteAdmin)

class MateriaResource(resources.ModelResource): 
    class Meta:
       model = Materia 
class MateriaAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'creado')
    resourceClass = MateriaResource
   # list_display = ('nombre' )
    
admin.site.register(Materia, MateriaAdmin)

class ProgramaResource(resources.ModelResource): 
    class Meta:
       model = Programa 
class ProgramaAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('nombre', 'creado')
    resourceClass = ProgramaResource
   # list_display = ('nombre' )
    
admin.site.register(Programa, ProgramaAdmin)

class HorarioResource(resources.ModelResource): 
    class Meta:
       model = Horario 
class HorarioAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    search_fields = ('horario', 'creado')
    resourceClass = HorarioResource
    list_display = ('horario', 'creado')
    
admin.site.register(Horario, HorarioAdmin)

class AsesoriaResource(resources.ModelResource): 
    class Meta:
       model = Asesoria 
class AsesoriaAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    list_display = ('fecha','hora', 'estado', 'tipoSolicitud')
    search_fields= ('fecha','hora', 'estado', 'tipoSolicitud')
    resourceClass = AsesoriaResource
    list_filter = ['fecha','hora', 'estado', 'tipoSolicitud', 'docente', 'materia', 'estudiante']
    filter_horizontal = ['materia','docente','estudiante']

admin.site.register(Asesoria, AsesoriaAdmin)

class HorarioResource(resources.ModelResource): 
    class Meta:
       model = Horario 
class BaseConocimientoAdmin(ImportExportModelAdmin, admin.ModelAdmin): 
    readonly_fields = ('creado', 'editado')
    list_display = ('tema','problema')
    search_fields= ('tema','problema')
    resourceClass = HorarioResource
    list_filter = ['tema','problema', 'materia']
    filter_horizontal = ['materia']

admin.site.register(BaseConocimiento, BaseConocimientoAdmin)



