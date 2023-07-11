  from gpiozero import AngularServo
from time import sleep

servo = AngularServo(3, min_pulse_width=0.0006, max_pulse_width=0.0023)

servo.angle = 180