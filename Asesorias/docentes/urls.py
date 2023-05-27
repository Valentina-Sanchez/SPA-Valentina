from django.urls import path
from .views import Docente_APIView

urlpatterns = [
   path('v1/doc', Docente_APIView.as_view()) 
]