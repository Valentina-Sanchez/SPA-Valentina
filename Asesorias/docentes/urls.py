from django.urls import path
from .views import Docente_APIViewGET,Docente_APIViewPOST, Docente_APIView_Detail, Estudiante_APIViewGET, Estudiante_APIViewPOST, Estudiante_APIView_Detail

urlpatterns = [
   path('v1/doce/get', Docente_APIViewGET.as_view()),
   path('v1/doce/post', Docente_APIViewPOST.as_view()),
   path('v1/doc/<int:pk>', Docente_APIView_Detail.as_view()),
   path('v1/estu/get', Estudiante_APIViewGET.as_view()),
   path('v1/estu/post', Estudiante_APIViewPOST.as_view()),
   path('v1/estu/<int:pk>', Estudiante_APIView_Detail.as_view()),

]