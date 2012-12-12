#ifndef FRAMESYNC_H
#define FRAMESYNC_H
#include "stdafx.h"
#include "base.h"
/*!
  *@class FrameSync
  *@brief Clase.
  */
class FrameSync : public Base
{
    public:
        FrameSync();
        ~FrameSync();
        int     Proccesing(void);
        bool    GetAlarFlag(void);
        bool    GetSincronyFlag(void);

        int     Alignment(void);
        bool    GetMFAlarmFlag(void);
        bool    GetMFSyncronyFlag(void);

    private:
        void    SignalProccesing(int fm, int f, int c);
        void    TransitionState ();
        void    EvenState();
        void    OddState();

        char state;
        unsigned int countByte; //Contador de byte
        unsigned int countFrame;//Contador de trama
        unsigned int countAlarm;//Contador de alarma

        bool    mfAlarm;
        bool    mfSync;
        int     countMFsync;
        int     countMFAlarm;

        bool syncPatt;  //Señal de ocurrencia de patron de sincronía
        bool evenPatt;  //Señal de ocurrencia de patrón par
        bool falarm;     //Señal de alarma
        bool fsynchrony; //Señal de sincronía
        bool fsync;     //Banderas de apoyo
        bool unavez;    //Bandera de apoyo
};

#endif // FRAMESYNC_H
