# Generated by Django 4.2.1 on 2023-06-13 21:08

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('docentes', '0005_asesoria_hora'),
    ]

    operations = [
        migrations.AlterField(
            model_name='docente',
            name='foto',
            field=models.ImageField(upload_to='Documentos/ProyectoCitas/asesorias/Imgs/', verbose_name='Foto'),
        ),
        migrations.AlterField(
            model_name='estudiante',
            name='foto',
            field=models.ImageField(upload_to='Documentos/ProyectoCitas/asesorias/Imgs/', verbose_name='Foto'),
        ),
    ]
