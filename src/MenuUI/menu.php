<?php

namespace Menu;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\{Player, Server};
use jojoe77777\FormAPI;

class Menu extends PluginBase{
	
	public function onEnable(){
		$this->getLogger()->info("Plugin Aktif by DemureTitan9970");
	}
	
	public function onCommand(CommandSender $o, Command $kmt, string $label, array $args): bool{
		if($kmt->getName() == "menu");{
			$gamer = $o->getPlayer();
			$this->yForm($o);
		}
		return true;
	}
	
	public function yForm(Player $o){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
		}
		switch ($re){
			case 1:
			$this->muForm($o);
			break;
		}
		switch ($re){
			case 2:
			$this->seForm($o);
			break;
		}
		switch ($re){
			case 3:
			$this->mForm($o);
			break;
		}
		switch ($re){
			case 4:
			$this->adForm($o);
			break;
		}
		switch ($re){
			case 5:
			$o->sendMessage("§7Menüden Çıkış Yaptın");
			break;
		}
		});
		$f->setTitle("§8» §bSunucu Menüsü §8«");
		$f->setContent("§aSunucumuzun Menüsüne Hoş geldin
§7Bu özellik tam çalışmayabilir hata varsa Lütfen sitemizden destek bildirim göndersiniz.
§c§lSitemiz: §6mc.nowalegacy.com		
");
		$f->addButton("§7Yetkililer");
		$f->addButton("§7Yenilikler");
		$f->addButton("§7Kurallar");
		$f->addButton("§7Rehber");
		$f->addButton("§7VIP Bilgi");
		$f->addButton("§cÇıkış");
		$f->sendToPlayer($o);
	}
	
	public function deForm(Player $o){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
			$re = $data[0];
			if($re === null){
				return true;
    }
switch ($re){
			case 0:
			$this->enForm($o);
			break;
		}
		switch ($re){
			case 1:
			$this->kuForm($o);
			break;
		}
		switch ($re){
			case 2:
			$this->xcForm($o);
			break;
		}
		switch ($re){
			case 3:
			$this->hiForm($o);
			break;
		}
		switch ($re){
			case 4:
			$this->zemForm($o);
			break;
		}
		switch ($re){
			case 5:
			$this->heralForm($o);
			break;
		}
switch ($re){
			case 6:
			$this->pcmForm($o);
			break;
    }
switch ($re){
			case 7:
			$this->hasForm($o);
			break;
    }
switch ($re){
           case 8:
           $this->yForm($o);
           break;
     }
		});
		$f->setTitle("§aSunucumuzun Yetki Sahipleri");
		$f->setContent("§aTıklayarak Bilgilerini Gör");
		$f->addButton("§7[§cKurucu§7] §cEnesTNTm");
		$f->addButton("§7[§cKurucu§7] §cKumandanTR");
		$f->addButton("§7[§bGeliştirici§7] §cxChersea");
		$f->addButton("§7[§5Yardımcı§7] §chirbil1");
		$f->addButton("§7[§aYetkili§7] §fZEmirPvp");
		$f->addButton("§7[§aYetkili§7] §fHeraldicLace201");
		$f->addButton("§7[§aYetkili§7] §fMartynaTNTm");
		$f->addButton("§7[§6Mimar§7] §fKROKTS");
		$f->addButton("§cMenüye Geri Dön");
		$f->sendToPlayer($o);
	}
	
	public function enForm(Player $o){
		$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
			$re = $data[0];
			if($re === null){
				return true;
			}
			switch ($re){
				case 0:
				$this->deForm($o);
				break;
			}
		});
		
		$f->setTitle("§cEnesTNTm §6Bilgisi");
		$f->setContent("§cAd Soyad: §6Rafalski Desimo
§cLakap: §6Enes Keskin
§cYetki: §cKurucu
§cYaş: §619
§cDoğum Yeri: §6Polska/Thchy
§cMesleği: §6Mekatronik Otomasyon
§cUzmanlık Alanı: §6CNC Torna ve Freze, C ve G kodları, HTML CSS JS MySQL yazılımları
§cSunucu Lisansı §6Bu Kişi Sahiptir.
§cEvli
");
		$f->addButton("§cGeri");
		$f->sendToPlayer($o);
	}
	
	public function kuForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
		}
	});
	
	$f->setTitle("§cKumandanTR §6Bilgisi");
	$f->setContent("§cAd Soyad: §6Rezan Özkul
§cLakap: §6Kumandan
§cYetki: Kurucu
§cYaş: §616
§cUzmanlık Alanı: §6Bildiğinin En İyisini Yapmak
");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}

	public function xcForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
		}
	});
	
	$f->setTitle("§cxChersea §6Bilgileri");
	$f->setContent("§cAd Soyad: §6Bartek Rowolizski
§cLakap: §6Blisko (Sel, Uçurum)
§cYetki: §bGeliştirici
§cYaş: §623
§cDoğum Yeri: §6Polska/Warszawa
§cMeslek: §6Bilişim (Veri Tabancılığı, Teknik Destek)
§cUzmanlık Alanı: §6Linux Centos Sunucu Ayarları, PHP HTML ASP JS MySQL MySQLi DNS Ayar
§cEvli
");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
	
	public function hiForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
		}
	});
	
	$f->setTitle("§chirbil1 Bilgisi");
	$f->setContent("§cAd Soyad: §6Mehmet Kaan Polattemir
§cLakap: §6hirbil
§cYetki: §5Yardımcı
§cYaş: §616
§cUzmanlık Alanı: §6Felsefe

");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
	
	public function zemForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
		}
	});
	
	$f->setTitle("§fZEmirPvp §6Bilgileri");
	$f->setContent("§cAd Soyad: §6Emirhan Kalkan
§cLakap: §6Emo
§cYetki: §aYetkili
§cYaş: §613
§cUzmanlık Alanı: §6Oyun Oynamak
");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
	
		public function heralForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
   }
  });
  $f->setTitle("§fHeraldicLace201 §6Bilgileri");
  $f->setContent("§cAd Soyad: §6Beren Emir
§cLakap: §6Heraldic
§cYetki: §aYetkili
§cYaş: §613
§cUzmanlık Alanı: §6Felsefe, Build
");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
	
		public function pcmForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
   }
  });
  $f->setTitle("§fMartynaTNTm §6Bilgileri");
  $f->setContent("§cAd Soyad: §6Martyna Keskin
§cLakap: §6HücreÖldürücü
§cYetki: §aYetkili
§cYaş: §620
§cMeslek: §6Filozof, Ticaret
§cUzmanlık Alanı: §6Felsefe, Mantık, Ticari Gelişim, Mesleki Gelişim, Elektronik
");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
	
		public function hasForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->deForm($o);
			break;
   }
  });
  $f->setTitle("§fKROKTS §6Bilgileri");
  $f->setContent("§cAd Soyad: §6Kerem kolukısaoğlu
§cLakap: §6Krok
§cYetki: §6Mimar
§cYaş: §613
§cUzmanlık Alanı: §6Build
");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
	public function muForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->yForm($o);
			break;
		}
	});
	
	$f->setTitle("§7Sunucu Yenilikleri");
	$f->setContent("§cBuild§6UHC >§aEşyalar artık büyülü.
§6/menu >§aBu komutla Sunucumuzun Genel Özellikler ve bilgilerine bakabilirsin.");
	$f->addButton("§cMenüye Geri Dön");
	$f->sendToPlayer($o);
	}

	public function seForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->yForm($o);
			break;
		}
	});
	
	$f->setTitle("§6Kurallar");
	$f->setContent("
>§6Hile Kullanımı 10p
>§6Bug Kullanımı 10p
>§6Küfür Etmek 3p
>§6Argo Kullanmak 2p
>§6Hakaret Etmek 3p
>§6Ailevi Küfür. Hakaret veya Argo Kullanmak 5p-10p
>§6Bir Kişiye Cinsellik yapmak yada Cinsel Yazılar Yazmak 5p-8p
>§6Yetkiliyi Oyalamak 3p
>§6Yetkili takımdakilere Küfür, Hakaret, Argo kullanmak 5p
>§6Sohbet alanına Hızlı ve Aynı yazı atmak 3p
>§cVideo Çekmemek yasaktır :) 0p
>§6Sunucu IP paylaşımı 10p
>§6Sunucu Ismi vermek 5p
>§6Oyunculara Yetkiliyim Kurucuyum gibi yada Ben Şu kişiyim diye yalan atmak yasaktır. NOT: (Ben şu kişiyim derken Bir yetkiliyi gösteriyorsa Geçerlidir.) 5p");
	$f->addButton("§cMenüye Geri Dön");
	$f->sendToPlayer($o);
	}
	
	public function mForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
		     case 0:
		     $this->vippForm($o);
		     break;
		}
		switch ($re){
		      case 1:
		      $this->ytForm($o);
		}
		switch ($re){
			case 2:
			$this->yForm($o);
			break;
		}
	});
	
	$f->setTitle("§7Sunucu Rehberi");
	$f->addButton("§cVIP Alma Rehberi");
	$f->addButton("§4Youtuber Rehberi");
	$f->addButton("§cMenüye Geri Dön");
	$f->sendToPlayer($o);
	}
    public function vippForm(Player $o){
            $f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
            $re = $data[0];
            if($re === null){
                return true;
            }
		switch ($re){
		     case 0:
		     $this->mForm($o);
		     break;
		}
            });
            
    $f->setTitle("§8VIP Alma Rehberi");
    $f->setContent("§6VIP Almak için §cmc.nowalegacy.com §6sitesine gidip kayıt ol veya hesabın varsa giriş yap ve kredi yatır kredi ile VIP veya daha fazla özelliğe sahip olabilir");
    $f->addButton("§cRehbere Geri Dön");
    $f->sendToPlayer($o);
    }
	public function ytForm(Player $o){
	        $f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
	        $re = $data[0];
	        if($re === null){
	            return true;
	        }
	        switch ($re){
	             case 0:
	             $this->mForm($o);
	             break;
	        }
	        });
	$f->setTitle("§7Youtuber Rehberi");
	$f->setContent("§6Youtube tagı ve yetkisi almak istiyorsan §cmc.nowalegacy.com/youtuber §6sitesine giderek kaydını oluştur.

§aAyrıca 700 Abone ve üzeri ayrıca 10000 den fazla toplam izlenme ve son olarakta sunucumuzun tanıtımını yapan bir video paylaşacaksınız.

§bBu sayede Youtube tagını alabilirsiniz");
	$f->addButton("§cRehbere Geri Dön");
	$f->sendToPlayer($o);
	}
	public function adForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->vipsForm($o);
			break;
		}
	     switch ($re){
	          case 1:
	          $this->vipssForm($o);
	          break;
	     }
	      switch ($re){
	            case 2:
	            $this->vipsssForm($o);
	            break;
	      }
	       switch ($re){
	             case 3:
	             $this->yForm($o);
	             break;
	       }
	});
	
	$f->setTitle("§aVIP Bilgi");
	$f->setContent("§aVIP Almak için §cmc.nowalegacy.com §agirerek kayıt ol ve işlemi yap");
	$f->addButton("§eVIP");
	$f->addButton("§6VIP+");
	$f->addButton("§cUVIP");
	$f->addButton("§cMenüye Geri Dön");
	$f->sendToPlayer($o);
	}
	
		public function vipsForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->adForm($o);
			break;
		}
	});
	
	$f->setTitle("§eVIP Bilgi");
	$f->setContent("§6Sunucu içi ve site §7[§eVIP§7] §6tagı
§6VIP Menü Açma Ve
§6Daha Fazla Bilgi Yakında");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
		public function vipssForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->adForm($o);
			break;
		}
	});
	
	$f->setTitle("§6VIP+ Bilgi");
	$f->setContent("§6Sunucu içi ve site §7[§6VIP+§7] §6tagı
§6VIP Menü Açma Ve
§6Daha Fazla Bilgi Yakında");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
		public function vipsssForm(Player $o){
			$f = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $o, array $data){
		$re = $data[0];
		if($re === null){
			return true;
		}
		switch ($re){
			case 0:
			$this->adForm($o);
			break;
		}
	});
	
	$f->setTitle("§cUVIP Bilgi");
	$f->setContent("§6Sunucu içi ve site §7[§cUVIP§7] §6tagı
§6VIP Menü Açma Ve
§6Daha Fazla Bilgi Yakında");
	$f->addButton("§cGeri");
	$f->sendToPlayer($o);
	}
}
?>