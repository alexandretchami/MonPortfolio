# Generated by Django 4.2.3 on 2023-07-09 21:44

from django.db import migrations, models
import uuid


class Migration(migrations.Migration):

    dependencies = [
        ('base', '0016_alter_skill_logo'),
    ]

    operations = [
        migrations.CreateModel(
            name='Question',
            fields=[
                ('answer', models.CharField(choices=[('backend', 'backend'), ('frontend', 'frontend'), ('fullstack', 'fullstack')], max_length=200)),
                ('created', models.DateTimeField(auto_now_add=True)),
                ('id', models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False, unique=True)),
            ],
        ),
    ]
