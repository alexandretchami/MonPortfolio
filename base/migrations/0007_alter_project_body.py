# Generated by Django 4.2.3 on 2023-07-06 05:05

import ckeditor.fields
from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0006_alter_project_created_alter_skill_created_and_more'),
    ]

    operations = [
        migrations.AlterField(
            model_name='project',
            name='body',
            field=ckeditor.fields.RichTextField(),
        ),
    ]