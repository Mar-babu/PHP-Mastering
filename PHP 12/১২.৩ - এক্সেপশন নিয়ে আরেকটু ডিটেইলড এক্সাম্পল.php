<?php
class ServerLoadedException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}
Interface NetworkStorage{
    function connect();
}

class MySQLServer implements NetworkStorage{
    function connect()
    {
        throw new DiskFullException()
    }
}
class PostgreSqlServer implements NetworkStorage{
    function connect()
    {
        // TODO: Implement connect() method.
    }
}
class MssSQLServer implements NetworkStorage{
    function connect()
    {
        // TODO: Implement connect() method.
    }
}