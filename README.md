# How are distributed the government's free wifi zones in Colombia?
## A visualization about colombian Ministry of Information Technologies and Communications free wifi zones

Colombian Ministry of Information Technologies and Communications project "Zonas Wifi Gratis Para la Gente" (Free Wifi Zones for People) seeks to connect people and to offer a space to take advantage of what Internet has to offer, like business or education opportunities.

The data of this visualization was published in july 2018 by the colombian [Ministry of Information Technologies and Communications](https://www.mintic.gov.co) (MinTIC) in the open data web pages www.datos.gov.co

## Objective
To generate an interactive visualization to present and summarize the distribution of MINTIC's free wifi zones in colombian departments and municipalities.

## Used Technologies
* [D3](https://d3js.org/)
* [Materialize CSS](https://materializecss.com)
* PHP (To preprocess data).

## Local execution
In order to execute the visualization locally you must have a local web server installed. Fow Windows it's recommended to use [1&1](https://www.1and1.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/) tutorial, [Gestiona tu Web](https://www.gestionatuweb.net/instalar-un-servidor-web-en-linux-para-pruebas-y-aprendizaje-con-xampp/) for Linux and [MAMP](https://documentation.mamp.info/en/MAMP-Mac/First-Steps/) for macOS.

## Screenshots
![preview](/screenshot.gif)

# About the vis
## What
Dataset Type: Tree.

Items(Nodes): Places

Link: Place → Place

Attributes:
1. Number of Wifi zones (Ordered, Quantitative, Sequential)

## Why
* Summarize the distribution of the free wifi zones in the Colombian departments. **(Summarize - Distribution)**
* Identify the places with the higher number of free wifi zones. **(Identify - Outliers)**
* Explore through the places to identify the number of free wifi zones by place. **(Explore - Features)**

## How
* Encode:
* * [Nodes] Separate, Order, align.
* Reduce: Filter
* Mark: Area
* Channels:
* * [Department] Color (Hue)
* * [Municipality and Wifi Zone] Color (Saturation)


## Insights
* Antioquia is the department with the higher distribution of wifi zones throughout its municipalities.
* Most of Bogotá's wifi zones are placed in Transmilenio's stations.
* Pereira (Risaralda), Barranquilla (Atlántico) and Valledupar (Cesar) are the municipalities with the higher number of free wifi zones; 105, 104 and 62 respectively.

# Related Content
* [Visualization](https://cubosensei.github.io/va-bonus2-colombian-free-wifi-zones/)
* [Slides](https://docs.google.com/presentation/d/1IByZ472Eazbb7p59ybnMrO3v5Z7aML3yzuSM9YT4p_E/edit?usp=sharing)
* [YouTube Video](https://youtu.be/EekQskWIVIQ)


# Credits
* This content is published with 2018 MIT licence by [Manuel Alvarado](http://www.manalco.co).
* Data by colombian [Ministry of Information Technologies and Communications](https://www.mintic.gov.co/) available at https://www.datos.gov.co/Ciencia-Tecnolog-a-e-Innovaci-n/Zonas-WiFi-Gratis-Para-la-Gente-DPTIC-Nacional/az23-fuws
