from rest_framework.response import Response
from rest_framework.views import APIView
from rest_framework import status
from .Serializers import AsesoriaSerializers, DocenteSerializers,EstudianteSerializers,MateriaSerializers
from .models import Estudiante, Docente, Asesoria, Materia
from django.http import Http404

# Create your views here.

#def listar_estudiante(self, request):
#   estudiante = Estudiante.objects.filter(pk=1)

class Docente_APIView(APIView):
    def get(self, request, format=None, *args, **kwargs):
        docente = Docente.objects.all()
        serializer = DocenteSerializers(docente, many=True)

        return Response(serializer.data)
    
    def post(self, request, format=None):
       print(request.data)
       serializer = DocenteSerializers(data=request.data) 
       if serializer.is_valid():
           serializer.save()
           return Response(serializer.data, status=status.HTTP_201_CREATED)
       return Response (serializer.errors, status=status.HTTP_400_BAD_REQUEST)

