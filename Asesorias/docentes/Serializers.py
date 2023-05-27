from rest_framework import serializers
from .models import Estudiante, Docente, Asesoria, Materia

class EstudianteSerializers(serializers.ModelSerializer):
    class Meta:
        model = Estudiante
        fields = '__all__'

class DocenteSerializers(serializers.ModelSerializer):
    class Meta:
        model = Docente
        fields = '__all__'

class AsesoriaSerializers(serializers.ModelSerializer):
    class Meta:
        model = Asesoria
        fields = '__all__'

class MateriaSerializers(serializers.ModelSerializer):
    class Meta:
        model = Materia
        fields = '__all__'