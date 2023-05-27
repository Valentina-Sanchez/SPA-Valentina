from django.shortcuts import render
from .models import Estudiante, Docente, Asesoria, Materia

# Create your views here.

def listar_estudiante(self, request):
    estudiante = Estudiante.objects.filter(pk=1)
