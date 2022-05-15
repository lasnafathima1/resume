#!/bin/sh
gunicorn --chdir app
index:app -w 2 --theards 2 
-b 0.0.0.0:8000