from rest_framework.response import Response
from rest_framework.views import APIView
from rest_framework import status
from .Serializers import AsesoriaSerializers, DocenteSerializers,EstudianteSerializers,MateriaSerializers
from .models import Estudiante, Docente, Asesoria, Materia
from django.http import Http404

# Create your views here.

#def listar_estudiante(self, request):
#   estudiante = Estudiante.objects.filter(pk=1)

class Docente_APIViewGET(APIView):
    def get(self, request, format=None, *args, **kwargs):
        docente = Docente.objects.all()
        serializer = DocenteSerializers(docente, many=True)

        return Response(serializer.data)
    
class Docente_APIViewPOST(APIView):
    
    def post(self, request, format=None):
       print(request.data)
       serializer = DocenteSerializers(data=request.data) 
       if serializer.is_valid():
           serializer.save()
           return Response(serializer.data, status=status.HTTP_201_CREATED)
       return Response (serializer.errors, status=status.HTTP_400_BAD_REQUEST)
    
class Docente_APIView_Detail(APIView):
    def get_object(self, pk):
        try: 
            return Docente.objects.get(pk=pk) 
        except Docente.DoesNotExist:
            raise Http404
        
    def get(self, request, pk, format=None):
        docente = self.get_object(pk)
        serializer = DocenteSerializers(docente)
        return Response(serializer.data)
    
    def put(self, request, pk, format=None):
        docente = self.get_object(pk)
        serializer = DocenteSerializers(docente, data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data, status=status.HTTP_200_OK)
        return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
    
    def delete(self, request, pk, format=None):
        docente = self.get_object(pk)
        docente.delete()
        return Response(status=status.HTTP_204_NO_CONTENT)


#Estudiantes

class Estudiante_APIViewGET(APIView):
    def get(self, request, format=None, *args, **kwargs):
        estudiante = Estudiante.objects.all()
        serializer = EstudianteSerializers(estudiante, many=True)

        return Response(serializer.data)
    
class Estudiante_APIViewPOST(APIView):
    
    def post(self, request, format=None):
       print(request.data)
       serializer = EstudianteSerializers(data=request.data) 
       if serializer.is_valid():
           serializer.save()
           return Response(serializer.data, status=status.HTTP_201_CREATED)
       return Response (serializer.errors, status=status.HTTP_400_BAD_REQUEST)
    
class Estudiante_APIView_Detail(APIView):
    def get_object(self, pk):
        try: 
            return Estudiante.objects.get(pk=pk) 
        except Estudiante.DoesNotExist:
            raise Http404
        
    def get(self, request, pk, format=None):
        estudiante = self.get_object(pk)
        serializer = EstudianteSerializers(estudiante)
        return Response(serializer.data)
    
    def put(self, request, pk, format=None):
        estudiante = self.get_object(pk)
        serializer = EstudianteSerializers(estudiante, data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data, status=status.HTTP_200_OK)
        return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
    
    def delete(self, request, pk, format=None):
        estudiante = self.get_object(pk)
        estudiante.delete()
        return Response(status=status.HTTP_204_NO_CONTENT)
