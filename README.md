# Tolls and Vehicles

## Base URL

__http://127.0.0.1:8000/api__

## How to Use

* To add a new toll, use the __/tolls__ endpoint and fill the next properties:

```
{
	"name" : "(string)",
	"city"  : "(string)"
}
```

* To add a new vehicle, use the __/vehicles__ endpoint and fill the next properties:

```
{
	"vehicle_type_id" : (int),
	"registration" : "(string)"
}
```

* To make a vehicle go through a toll, use the __/vehicles/{vehicleId}/tolls/{tollId}__ endpoint, adding the id for each corresponding element, for example:

```
http://127.0.0.1:8000/api/vehicles/1/tolls/1
```