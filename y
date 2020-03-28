{
	"authHost": "http://localhost",
	"authEndpoint": "/broadcasting/auth",
	"clients": [
		{
			"appId": "ffbce717419b09b8",
			"key": "9a82768b67d6de65ff3ef7f8d4237dc0"
		}
	],
	"database": "redis",
	"databaseConfig": {
		"redis": {},
		"sqlite": {
			"databasePath": "/database/laravel-echo-server.sqlite"
		}
	},
	"devMode": true,
	"host": null,
	"port": "y",
	"protocol": "http",
	"socketio": {},
	"secureOptions": 67108864,
	"sslCertPath": "",
	"sslKeyPath": "",
	"sslCertChainPath": "",
	"sslPassphrase": "",
	"subscribers": {
		"http": true,
		"redis": true
	},
	"apiOriginAllow": {
		"allowCors": true,
		"allowOrigin": "y",
		"allowMethods": "y",
		"allowHeaders": "y"
	}
}